<!DOCTYPE html>
<html>

<head>
    <title>laravel webcam capture image and save from camera - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results {
            padding: 20px;
            border: 1px solid;
            background: #ccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Laravel webcam capture image and save from camera - ItSolutionStuff.com</h1>
        <form method="POST" action="{{ route('presensi.compare') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div id="my_camera"></div>
                    <br />
                    <input id='cam' type=button value="Take Snapshot" onClick="take_snapshot()">
                    <input type="hidden" name="image" class="image-tag">
                </div>
                <div class="col-md-6">
                    <div id="results">Your captured image will appear here...</div>
                </div>
                <div class="col-md-12 text-center">
                    <br />
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('dist/face-api.js') }}"></script>

    <script language="JavaScript">
        let photo

        Webcam.set({
            width: 490,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
                photo = data_uri
                return photo
            });
        }

        // opencv

        Promise.all([
            faceapi.nets.faceRecognitionNet.loadFromUri("{{asset('models')}}"),
            faceapi.nets.faceLandmark68Net.loadFromUri("{{asset('models')}}"),
            faceapi.nets.ssdMobilenetv1.loadFromUri("{{asset('models')}}")
        ]).then(start)

        async function start() {
            const labeledFaceDescriptors = await loadLabeledImages()
            const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.5)
            console.log('faceMatcher:');
            console.log(faceMatcher);
            window.addEventListener('click', async () => {
                console.log('click');
                console.log(photo);
                image = await faceapi.bufferToImage(photo)

                const detections = await faceapi.detectAllFaces(image).withFaceLandmarks()
                    .withFaceDescriptors()
                const resizedDetections = faceapi.resizeResults(detections, displaySize)
                const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor))
                console.log('Hasil :');
                console.log(results)
            })
        }

        function loadLabeledImages() {
            const labels = []
            @foreach ($siswas as $siswa)
                labels.push("{{$siswa->nim}}")
            @endforeach
            return Promise.all(
                labels.map(async label => {
                    let img
                    let detections
                    const descriptions = []
                    @foreach ($siswas as $siswa)
                        @foreach (json_decode($siswa->images) as $image)
                            img = await faceapi.fetchImage("{{asset('/storage/' . str_replace("\\", "/", $image))}}")
                            detections = await faceapi.detectSingleFace(img).withFaceLandmarks()
                            .withFaceDescriptor()
                            descriptions.push(detections.descriptor)
                        @endforeach
                    @endforeach
                    return new faceapi.LabeledFaceDescriptors(label, descriptions)
                })
            )
        }
    </script>
</body>

</html>

<!doctype html>
<html data-theme="cupcake">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
    {{-- jquery datatable --}}
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
</head>

<body>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- jquery datatable --}}
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
    {{-- web-cam.js --}}
    <script src="{{asset('assets/js/web-cam.js')}}"></script>
</body>

</html>

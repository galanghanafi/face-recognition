@extends('layouts.app')
@section('content')
    <div class="h-screen flex">
        <div class="w-full flex flex-col justify-center">
            <form method="POST" action="{{ route('attendance.capture') }}">
                @csrf
                <div class="flex">
                    <div class="ml-auto mr-auto w-full">
                        <div id="my_camera" class="ml-auto mr-auto"></div>
                        <div class="text-center">
                            <input type=button value="Take Snapshot" class="ml-auto mr-auto "
                            onClick="window.location='/attendance#my-modal'; take_snapshot();">
                            <input type="hidden" name="image" class="image-tag">
                        </div>
                    </div>
                </div>

                <div class="modal modal-bottom sm:modal-middle" id="my-modal">
                    <div class="modal-box">
                        <div id="results">Your captured image will appear here...</div>
                        <div class="modal-action">
                            <a href="#" class="btn btn-warning">Kembali</a>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="ml-auto mr-auto w-full">
            {{-- Table --}}
            <div class="overflow-x-auto overflow-y-scroll max-h-screen">
                <table class="table table-compact w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>company</th>
                            <th>location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Littel, Schaden and Vandervort</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- Table end --}}
        </div>
    </div>
@endsection

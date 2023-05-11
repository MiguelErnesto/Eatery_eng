@extends('adminlte::page')

@section('content')
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror

    <br />
    <div class="container w-75 p-4">
        <div class="card border border-dark">
            <div class="card-header bg-dark">
                <h5>{{ config('app.nav_section5') }} &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; MAP Edit </h5>
            </div>
            <div class="card-body">
                <form id="section5_form" action="{{ route('section5.update', ['section5' => $section5->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <label for="title" class="form-label">How to change your own map point</label>
                    <ol type="1">
                        <li>Go to: <a href="https://maps.google.com/">Google Maps</a></li>
                        <li>Click on your location point</li>
                        <li>Click "Share" and choose "Embed map" tab</li>
                        <li>Copy only URL within field src="" and paste it below</li>
                        <li>Click on Update button</li>
                    </ol>

                    <div class="mb-3">
                        <label for="title" class="form-label">Map Parameters: </label>
                        {{--  <input type="text" id="map_parameters" name="map_parameters" class="form-control"
                            value="{{ $section5->map_parameters }}"> --}}
                        <textarea name="map_parameters" rows="5" class="form-control" id="map_parameters" placeholder="Map parameters">
                                {{ $section5->map_parameters }}
                        </textarea>
                        @error('map_parameters')
                            <div class="text-danger text-center">Required value</div>
                        @enderror
                    </div>

                    <div class="text-right mt-3">
                        <button type=" submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div> <!-- card body  -->
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("section5_form").addEventListener('submit', validarFormulario);
        });

        function validarFormulario(evento) {
            evento.preventDefault();
            if ((document.getElementById('map_parameters').value.length == 0)
                .value))) {
            document.getElementById('map_parameters').className = 'form-control border border-danger';
            document.getElementById('map_parameters').value = '';
            document.getElementById('map_parameters').placeholder = '--- Valid value required ---';
            document.getElementById('map_parameters').focus();
            return;
        }

        this.submit();
        }
    </script>
@endpush

@extends('adminlte::page')

@section('content')
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror

    <br />
    <div class="container w-50 p-4">
        <div class="card border border-dark">
            <div class="card-header bg-dark">
                <h5> {{ config('app.nav_section6') }} &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Edit </h5>
            </div>

            <div class="card-body">
                <form id="section6_form" action="{{ route('section6.update', ['section6' => $section6->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Phone number: </label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control"
                            value="{{ $section6->phone_number }}">
                        @error('phone_number')
                            <div class="text-danger text-center">Required value</div>
                        @enderror
                    </div>

                    <div class="text-right mt-3">
                        <button type=" submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div> <!-- card body  -->
        </div> <!-- card border  -->
    </div> <!-- container  -->
@endsection

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("section6_form").addEventListener('submit', validarFormulario);
        });

        function validarFormulario(evento) {
            evento.preventDefault();
            var exp_phone_number = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            if ((document.getElementById('phone_number').value.length == 0) || !((
                    exp_phone_number.test(document.getElementById(
                            'phone_number')
                        .value)))) {
                document.getElementById('phone_number').className = 'form-control border border-danger';
                document.getElementById('phone_number').placeholder = '--- A valid telephone number required ---';
                document.getElementById('phone_number').focus();
                return;
            }
            this.submit();
        }
    </script>
@endpush

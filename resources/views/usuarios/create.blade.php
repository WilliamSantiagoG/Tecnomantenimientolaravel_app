@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')

<style>
    /* Asegurarse de que el fondo cubra toda la página */
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        background-color: #2c2c2c; /* Fondo negro no tan oscuro */
        color: #f8f9fa; /* Letras claras */
    }

    .container {
        padding-top: 56px; /* Asegura que el contenido no se superponga al navbar */
        /* Ajusta según la altura del navbar si es necesario */
    }

    .card {
        background-color: #333; /* Fondo más claro para la tarjeta */
        border: none; /* Sin borde para la tarjeta */
        border-radius: 0.5rem; /* Esquinas redondeadas para la tarjeta */
        box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.5); /* Sombra para la tarjeta */
    }

    .card-title {
        color: #f8f9fa; /* Letras claras en el título de la tarjeta */
    }

    .form-label {
        color: #f8f9fa; /* Letras claras en las etiquetas del formulario */
    }

    .form-control {
        background-color: #444; /* Fondo más oscuro para los campos del formulario */
        color: #f8f9fa; /* Letras claras en los campos del formulario */
        border: 1px solid #555; /* Borde más claro para los campos del formulario */
        border-radius: 0.25rem; /* Esquinas redondeadas para los campos del formulario */
    }

    .form-control:focus {
        border-color: #28a745 !important; /* Color del borde al enfocar (verde) */
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25) !important; /* Sombra verde */
    }

    .btn-primary {
        background-color: #28a745 !important; /* Color de fondo del botón (verde) */
        border: none !important; /* Sin borde para el botón */
        color: #ffffff !important; /* Color del texto del botón (blanco) */
    }

    .btn-primary:hover {
        background-color: #218838 !important; /* Color de fondo del botón al pasar el mouse (verde oscuro) */
    }

    .btn-primary:focus, .btn-primary:active {
        background-color: #218838 !important; /* Asegura que el color no cambie al hacer clic */
        box-shadow: none !important; /* Elimina la sombra del botón al hacer clic */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crear Usuario</h5>
                    <form action="/Usuarios" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="codigo" name="Nombre" placeholder="Ingrese el nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="Examen1" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="Examen1" name="Telefono" placeholder="Ingrese el teléfono" required>
                        </div>
                        <div class="mb-3">
                            <label for="Examen2" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="Examen2" name="Contraseña" placeholder="Ingrese la contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif

@endsection

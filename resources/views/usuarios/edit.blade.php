@extends('layouts.app')

@section('title', 'Editar Usuario')

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
        padding-top: 30px; /* Ajusta el valor según la necesidad */
    }

    .card {
        background-color: #333; /* Fondo más claro para la tarjeta */
        border: none; /* Sin borde para la tarjeta */
        border-radius: 0.5rem; /* Esquinas redondeadas para la tarjeta */
        box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.5); /* Sombra para la tarjeta */
        margin-top: -20px; /* Ajusta el valor para mover la tarjeta hacia arriba */
    }

    .card-body {
        padding: 2rem; /* Aumenta el padding para una apariencia más espaciosa */
    }

    .card-title {
        color: #f8f9fa; /* Letras claras en el título de la tarjeta */
        margin-bottom: 1.5rem; /* Espacio debajo del título */
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
        border-color: #ffc107; /* Color del borde al enfocar (amarillo) */
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25); /* Sombra amarilla */
    }

    .btn-warning {
        background-color: #ffc107; /* Color amarillo */
        border: none; /* Sin borde para el botón */
    }

    .btn-warning:hover {
        background-color: #e0a800; /* Color amarillo más oscuro al pasar el mouse */
    }

    .alert-success {
        background-color: #343a40; /* Fondo oscuro para las alertas de éxito */
        color: #d4edda; /* Letras claras en las alertas de éxito */
        border: 1px solid #ced4da; /* Borde claro para las alertas */
        border-radius: 0.25rem; /* Esquinas redondeadas para las alertas */
    }
</style>

<div class="container my-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar</h5>
                    <form action="/Usuarios/{{$usuario->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Esto es necesario para usar el método PUT -->
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="codigo" name="Nombre" value="{{ $usuario->Nombre }}" placeholder="Ingrese el nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="Telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="Telefono" name="Telefono" value="{{ $usuario->Telefono }}" placeholder="Ingrese el teléfono" required>
                        </div>
                        <div class="mb-3">
                            <label for="Contraseña" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="Contraseña" name="Contraseña" value="{{ $usuario->Contraseña }}" placeholder="Ingrese la contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-warning action-btn w-100">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

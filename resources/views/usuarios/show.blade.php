@extends('layouts.app')

@section('title', 'Detalles de usuario')

@section('content')

<style>
    /* Asegurarse de que el fondo cubra toda la página */
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        background-color: #2c2c2c; /* Fondo oscuro */
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
    }

    .card-title {
        color: #f8f9fa; /* Letras claras en el título de la tarjeta */
        margin-bottom: 1.5rem; /* Espacio debajo del título */
    }

    .card-text {
        color: #f8f9fa; /* Letras claras en el texto de la tarjeta */
    }

    .btn-primary {
        background-color: #004085; /* Azul oscuro */
        border: none; /* Sin borde para el botón */
        border-radius: 0.25rem; /* Esquinas redondeadas para el botón */
        color: #fff; /* Letras blancas */
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background-color: #00376b; /* Azul más oscuro al pasar el mouse, enfocar o hacer clic */
        color: #fff; /* Letras blancas */
    }

    .btn-secondary {
        background-color: #6f42c1; /* Morado */
        border: none; /* Sin borde para el botón */
        border-radius: 0.25rem; /* Esquinas redondeadas para el botón */
        color: #fff; /* Letras blancas */
    }

    .btn-secondary:hover,
    .btn-secondary:focus,
    .btn-secondary:active {
        background-color: #5a2d81; /* Morado más oscuro al pasar el mouse, enfocar o hacer clic */
        color: #fff; /* Letras blancas */
    }

    .btn-warning {
        background-color: #fd7e14; /* Naranja */
        border: none; /* Sin borde para el botón */
        border-radius: 0.25rem; /* Esquinas redondeadas para el botón */
        color: #fff; /* Letras blancas */
    }

    .btn-warning:hover,
    .btn-warning:focus,
    .btn-warning:active {
        background-color: #e36c1a; /* Naranja más oscuro al pasar el mouse, enfocar o hacer clic */
        color: #fff; /* Letras blancas */
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Detalles de {{ $usuario->Nombre }}</h2>
                    <p class="card-text"><strong>Teléfono:</strong> {{ $usuario->Telefono }}</p>
                    <p class="card-text"><strong>Contraseña:</strong> {{ $usuario->Contraseña }}</p>

                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between">
                        <a class="btn btn-warning mb-2 mb-sm-0" href="{{ route('Usuarios.gestiones.create', $usuario->id) }}">Crear Mantenimiento</a>
                        <a class="btn btn-secondary" href="{{ route('Usuarios.gestiones', $usuario->id) }}">Ver Mantenimientos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

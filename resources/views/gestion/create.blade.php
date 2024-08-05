@extends('layouts.app')

@section('title','Crear Mantenimiento')

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
        margin-top: -80px; /* Ajusta el valor para mover la tarjeta hacia arriba */
    }

    .card-body {
        padding: 2rem; /* Aumenta el padding para una apariencia más espaciosa */
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
        border-color: #fd7e14 !important; /* Color del borde al enfocar (naranja) */
        box-shadow: 0 0 0 0.2rem rgba(253, 126, 20, 0.25) !important; /* Sombra naranja */
    }

    .form-control-file {
        background-color: #444; /* Fondo más oscuro para el campo de archivos */
        color: #f8f9fa; /* Letras claras en el campo de archivos */
        border: 1px solid #555; /* Borde más claro para el campo de archivos */
        border-radius: 0.25rem; /* Esquinas redondeadas para el campo de archivos */
    }

    .btn-primary {
        background-color: #fd7e14 !important; /* Color naranja */
        border: none !important; /* Sin borde para el botón */
        border-radius: 0.25rem !important; /* Esquinas redondeadas para el botón */
        color: #fff !important; /* Letras blancas */
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #e67e22 !important; /* Naranja más oscuro al pasar el mouse o enfocar */
        color: #fff !important; /* Letras blancas */
    }

    .btn-primary:active {
        background-color: #fd7e14 !important; /* Mantiene el color naranja al hacer clic */
        color: #fff !important; /* Letras blancas */
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('Usuarios.gestiones.store', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="DescripcionCliente" class="form-label">Descripción de la falla según cliente</label>
                            <textarea class="form-control" id="DescripcionCliente" name="DescripcionCliente" rows="4" placeholder="Descripción de la falla según cliente" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="EstadoFisico" class="form-label">Estado físico del computador</label>
                            <textarea class="form-control" id="EstadoFisico" name="EstadoFisico" rows="4" placeholder="Estado físico del computador" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Conclusiones" class="form-label">Conclusiones y descripción de la falla presentada</label>
                            <textarea class="form-control" id="Conclusiones" name="Conclusiones" rows="4" placeholder="Conclusiones y descripción de la falla presentada" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Modelo" class="form-label">Modelo del computador</label>
                            <input type="text" class="form-control" id="Modelo" name="Modelo" placeholder="Modelo del computador" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_mantenimiento" class="form-label">Fecha del Mantenimiento</label>
                            <input type="date" class="form-control" id="fecha_mantenimiento" name="fecha_mantenimiento">
                        </div>
                        <div class="mb-3">
                            <label for="imagenes" class="form-label">Cargar fotos del mantenimiento</label>
                            <input type="file" class="form-control-file" id="imagenes" name="imagenes[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Crear Mantenimiento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

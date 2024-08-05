@extends('layouts.app')

@section('title', 'Listado de usuarios')

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

    .custom-title {
        color: #f8f9fa; /* Letras claras para el título */
    }

    .table {
        background-color: #333; /* Fondo más claro para la tabla */
        color: #f8f9fa; /* Letras claras en la tabla */
        border-radius: 0.5rem; /* Esquinas redondeadas para la tabla */
        overflow: hidden; /* Asegura que las esquinas redondeadas no se corten */
    }

    .table thead th {
        background-color: #444; /* Fondo para los encabezados de la tabla */
        color: #f8f9fa; /* Letras claras en los encabezados */
    }

    .table tbody tr:nth-child(even) {
        background-color: #444; /* Fondo alternante para las filas pares */
    }

    .table tbody tr:nth-child(odd) {
        background-color: #333; /* Fondo alternante para las filas impares */
    }

    .btn {
        height: 36px; /* Ajusta esta altura según sea necesario */
        padding: 0.375rem 0.75rem; /* Ajusta el padding según sea necesario */
        font-size: 0.875rem; /* Ajusta el tamaño de fuente según sea necesario */
        line-height: 1.5; /* Ajusta la altura de línea según sea necesario */
    }

    .btn-primary {
        background-color: #007bff; /* Color de fondo del botón (azul claro) */
        border: none; /* Sin borde para el botón */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Color de fondo del botón al pasar el mouse (azul oscuro) */
    }

    .btn-danger {
        background-color: #dc3545; /* Color de fondo del botón de eliminar (rojo) */
        border: none; /* Sin borde para el botón */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Color de fondo del botón al pasar el mouse (rojo oscuro) */
    }

    .btn-warning {
        background-color: #ffc107; /* Color de fondo del botón de editar (amarillo) */
        border: none; /* Sin borde para el botón */
    }

    .btn-warning:hover {
        background-color: #e0a800; /* Color de fondo del botón al pasar el mouse (amarillo oscuro) */
    }
</style>

<br>
<h3 class="text-center custom-title">Usuarios registrados</h3>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Contraseña</th>
                            <th>Acciones</th> <!-- Nueva columna para los botones -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $cursito)
                            <tr>
                                <td>{{ $cursito->Nombre }}</td>
                                <td>{{ $cursito->Telefono }}</td>
                                <td>{{ str_repeat('•', strlen($cursito->Contraseña)) }}</td>
                                <td>
                                    <div class="d-flex flex-column flex-sm-row justify-content-sm-around">
                                        <a href="/Usuarios/{{ $cursito->id }}" class="btn btn-primary action-btn mb-1 mb-sm-0">Ver más</a>
                                        <form action="{{ route('Usuarios.destroy', $cursito->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger action-btn mb-1 mb-sm-0" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
                                        </form>
                                        <a href="/Usuarios/{{ $cursito->id }}/edit" class="btn btn-warning action-btn">Editar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

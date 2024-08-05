@extends('layouts.app')

@section('title', 'Listado de mantenimientos')

@section('content')

<style>
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        background-color: #2c2c2c; /* Fondo oscuro */
        color: #f8f9fa; /* Letras claras */
    }

    .custom-title {
        color: #f8f9fa; /* Letras claras para el título */
    }

    .custom-card {
        background-color: #333; /* Fondo oscuro para la tarjeta */
        color: #f8f9fa; /* Letras claras dentro de la tarjeta */
        border: none; /* Sin borde para la tarjeta */
        border-radius: 0.5rem; /* Esquinas redondeadas para la tarjeta */
        box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.5); /* Sombra para la tarjeta */
        overflow: hidden; /* Para asegurar que los bordes redondeados se apliquen correctamente */
        height: 100%; /* Asegurar que la tarjeta ocupe todo el espacio del contenedor */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-body {
        padding: 1.5rem; /* Padding más grande para el contenido de la tarjeta */
        text-align: justify; /* Justificar texto */
        flex: 1; /* Asegurar que el cuerpo de la tarjeta ocupe el espacio disponible */
    }

    .card-title,
    .card-text {
        color: #f8f9fa; /* Letras claras para el título y texto de la tarjeta */
        font-size: 1rem; /* Asegurar que todas las descripciones tengan el mismo tamaño de fuente */
    }

    .carousel-item img {
        max-height: 300px; /* Limita la altura de las imágenes en el carrusel */
        object-fit: cover; /* Ajusta las imágenes para que cubran el área del contenedor sin deformarse */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(255, 255, 255, 0.5); /* Color de fondo de los controles del carrusel */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        border-radius: 50%; /* Controles redondeados */
    }

    .card-footer {
        text-align: center;
        padding: 0.75rem 1.25rem;
        color: #f8f9fa; /* Letras claras en el pie de la tarjeta */
        background-color: #444; /* Fondo oscuro en el pie de la tarjeta */
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
    }

    .card-wrapper {
        flex: 1 1 33%; /* Ocupar un tercio del ancho del contenedor */
        padding: 0.5rem; /* Espacio entre tarjetas */
    }

    .custom-card {
        height: 100%; /* Asegurar que la tarjeta ocupe todo el espacio del contenedor */
    }
</style>

<br>
<h3 class="text-center custom-title">Mantenimientos registrados</h3>
<br>
<div class="card-container">
    @foreach ($gestiones as $gestion)
        <div class="card-wrapper">
            <div class="card shadow custom-card">
                <div id="carousel{{ $gestion->idGestion }}" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach(json_decode($gestion->Imagenes) as $index => $imagen)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ Storage::url($imagen) }}" class="d-block w-100" alt="Imagen de {{ $gestion->DescripcionCliente }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $gestion->idGestion }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $gestion->idGestion }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">Descripción del Cliente: {{ $gestion->DescripcionCliente }}</p>
                    <p class="card-text">Estado Físico: {{ $gestion->EstadoFisico }}</p>
                    <p class="card-text">Conclusiones de la falla presentada: {{ $gestion->Conclusiones }}</p>
                    <p class="card-text">Modelo del computador: {{ $gestion->Modelo }}</p>
                    <p class="card-text">Fecha del Mantenimiento: {{ $gestion->fecha_mantenimiento ? $gestion->fecha_mantenimiento->format('d/m/Y') : 'No disponible' }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection

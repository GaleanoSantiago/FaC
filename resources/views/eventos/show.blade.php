@extends('layouts.app')

@section('title', 'ISFDCyT - ' . $evento['titulo'])
@section('headerId', 'header_eventos')

@section('content')
<section id="evento-show" class="evento-show">

    {{-- Imagen destacada + título --}}
    <div class="container container-img">
        <div class="evento-header-card">
            <div class="header-text">
                <h1>{{ $evento['titulo'] }}</h1>
                <p class="fecha-posteo">
                    Publicado el {{ \Carbon\Carbon::parse($evento['created_at'])->format('d M Y') }}
                </p>
            </div>

            <div class="evento-imagen-secundaria">
                <img src="{{ asset($evento['img']) }}" alt="{{ $evento['titulo'] }}">
            </div>
        </div>
    </div>

    {{-- Contenido principal --}}
    <div class="evento-contenido container">
        {{-- Columna lateral --}}
        <div class="evento-info">
            <div class="info-card">
                <h3>Detalles del evento</h3>
                <ul>
                    <li><strong>Fecha de publicación:</strong> {{ \Carbon\Carbon::parse($evento['created_at'])->format('d-m-Y H:i') }}</li>
                    <li><strong>Fecha del evento:</strong> {{ \Carbon\Carbon::parse($evento['fecha_evento'])->format('d-m-Y H:i') }}</li>
                    <li><strong>Última actualización:</strong> {{ \Carbon\Carbon::parse($evento['updated_at'])->format('d-m-Y H:i') }}</li>
                </ul>
            </div>

            <div class="acciones-evento">
                <a href="{{ route('eventos.index') }}" class="btn btn-main">
                    ← Volver a eventos
                </a>
                <div class="compartir">
                    <span>Compartir:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank" class="item-shares"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://api.whatsapp.com/send?text={{ urlencode($evento['titulo'] . ' ' . Request::url()) }}" target="_blank" class="item-shares"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($evento['titulo']) }}&url={{ urlencode(Request::url()) }}" target="_blank" class="item-shares"><i class="fab fa-x-twitter"></i></a>
                    <a href="mailto:?subject={{ urlencode($evento['titulo']) }}&body={{ urlencode(Request::url()) }}" target="_blank" class="item-shares"><i class="fa-solid fa-envelope"></i></a>
                    <a href="{{ Request::url() }}" target="_blank" class="item-shares"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
        </div>

        {{-- Columna de contenido --}}
        <div class="evento-descripcion">
            <h2>Sobre el evento</h2>
            <p>{!! nl2br(e($evento['contenido'])) !!}</p>
        </div>
    </div>
</section>

{{-- CSS --}}
<style>

</style>
@endsection

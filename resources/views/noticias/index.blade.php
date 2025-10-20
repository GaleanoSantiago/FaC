@extends('layouts.app')

@section('headerId', 'header_news')
@section('title', 'ISFDCyT - Noticias')

@section('content')
    <section id="noticias">
        <div class="container">
            <h2>Noticias</h2>
            <div class="descripcion">
                    <p>En esta sección vas a encontrar todas las noticias relacionadas a la institución, así como comunicados oficiales, logros de estudiantes y docentes, actividades destacadas, proyectos académicos, jornadas especiales y novedades sobre la vida institucional.</p>
                </div>
        <div class="row container-news catalogo">
            @foreach ($noticias as $noticia)
            <div class="card-carreras card-news">
                <div class="img-card-carrera">
                    <img src="{{ asset($noticia['imagen']) }}" alt="{{ $noticia['titulo'] }}">
                </div>

                <div class="card-body-carrera">
                    <div class="container-fecha">
                        <span class="news-fecha">
                            {{ \Carbon\Carbon::parse($noticia['created_at'])->format('d-m-Y') }}
                        </span>
                    </div>

                    <h5>{{ $noticia['titulo'] }}</h5>
                    <p>{{ Str::limit($noticia['contenido'], 120, '...') }}</p>

                    <div class="container-btn">
                        <a href="{{ route('noticias.show', $noticia['id_noticia']) }}" class="btn btn-main">
                            Leer más <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        </div>
    </section>
@endsection


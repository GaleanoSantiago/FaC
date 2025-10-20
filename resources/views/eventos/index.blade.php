@extends('layouts.app')

@section('headerId', 'header_news')
@section('title', 'ISFDCyT - Eventos')

@section('content')
    <section id="eventos">
        <div class="container">
            <h2>Eventos</h2>
            <div class="row container-news">
                <div class="descripcion">
                    <p>En esta sección vas a encontrar las actividades más importantes que se realizan en 
                        nuestro Instituto Superior: jornadas académicas, capacitaciones, talleres, actos 
                        institucionales y encuentros con la comunidad educativa.</p>
                </div>
                    @foreach ($eventos as $evento)
                        <div class="card-carreras card-evento">
                            <div class="img-card-carrera">
                                <img src="{{ asset($evento['img']) }}" alt="{{ $evento['titulo'] }}">
                            </div>

                            <div class="card-body-carrera">
                                <div class="container-fecha">
                                    <span class="news-fecha">
                                        {{ \Carbon\Carbon::parse($evento['created_at'])->format('d M Y') }}
                                    </span>
                                </div>

                                <h5>{{ $evento['titulo'] }}</h5>

                                <div class="container-fechas-evento">
                                    <span>Fecha Evento: {{ \Carbon\Carbon::parse($evento['fecha_evento'])->format('d-m-Y H:i') }}</span>
                                </div>

                                <p>{{ Str::limit($evento['contenido'], 120, '...') }}</p>
                            </div>

                            <div class="container-btn">
                                <a href="{{ route('eventos.show', $evento['id_evento']) }}" class="btn btn-main">
                                    Ver Evento <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>

                    @endforeach
                
            </div>
                
        </div>
    </section>
@endsection


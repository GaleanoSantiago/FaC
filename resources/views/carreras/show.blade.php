@extends('layouts.app')

@section('title', 'ISFDCyT - ' . $carrera['nombre'])
@section('headerId', '')

@section('content')
<div id="carreras-header" 
    style="
        background: linear-gradient(rgba(5,7,8, 0.4), rgba(5,7,8, 0.4)), url('{{ asset('img/' . $carrera['fondo']) }}');
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    ">
    <img src="{{ asset('img/logo.png') }}" alt="logo felix atilio cabrera">
    <h1 id="titulo-carrera">{{ $carrera['nombre'] }}</h1>
    <div class="container-btn-down">
        <a href="#informacion-carrera" class="btn-down">
            <svg class="svg-arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <path d="M50.5,19.881c-1.104,0-2,0.896-2,2V72.17L33.193,56.609c-0.781-0.781-1.922-0.781-2.703,0 
                c-0.781,0.78-0.719,2.047,0.062,2.828l18.883,18.857c0.375,0.375,0.899,0.586,1.43,0.586s1.047-0.211,1.422-0.586l18.857-18.857 
                c0.781-0.781,0.783-2.048,0.002-2.828c-0.781-0.781-2.296-0.781-3.077,0L52.5,71.933V21.881
                C52.5,20.776,51.604,19.881,50.5,19.881z"></path>
            </svg>
        </a>
    </div>
</div>

<section id="informacion-carrera" class="">
    <div class="container bloq-cont">
        <h2>Información sobre la carrera</h2>
        <h5><span class="text-resaltado">Nombre:</span> {{ $carrera['nombre'] }}</h5>
        <h5><span class="text-resaltado">Duración:</span> {{ $carrera['duracion'] }}</h5>
        <h5><span class="text-resaltado">Clasificación:</span> {{ $carrera['clasificacion'] }}</h5>
        <h5><span class="text-resaltado">Horario:</span> {{ $carrera['horario'] }}</h5>
        <h5><span class="text-resaltado">Descripción:</span></h5>
        <p>{{ $carrera['descripcion'] }}</p>

        <div class="row">
            <div class="cont-btn-incripcion">
                <h3 class="subtitulo">PREINSCRIPCIÓN</h3>
                <ul>
                    <li>La preinscripción online se encuentra disponible desde noviembre hasta enero. 
                        <span class="text-resaltado">Actualmente no se encuentra habilitado.</span>
                    </li>
                    <li>Todas las carreras pueden preinscribirse a través de la misma página web.</li>
                    <li>La preinscripción a las carreras terciarias se realiza únicamente desde el sitio web.</li>
                    <li>Si desea conocer más información acerca de las carreras puede acercarse a la institución
                        a partir de las 19:00 hs.
                    </li>
                </ul>
                <a href="https://www.formosa.gob.ar/educacion/inscripcioneducacionsuperior" 
                   target="_blank" class="btn-incripcion">
                    Preinscripción Online
                </a>
            </div>
        </div>
    </div>
</section>

<section id="estructura-curricular" class="bg-white-1">
    <div class="container">
        <h2>Plan de Estudio</h2>
        <div class="img-estructura-curr" id="cont-img-curricular">
            <img src="{{ asset('img/' . $carrera['planEstudio']) }}" 
                 alt="Estructura curricular de {{ $carrera['nombre'] }}"
                 id="img-curricular" class="img-fluid shadow rounded-4" 
                 style="cursor: pointer; transition: transform 0.3s ease;">
        </div>

        <!-- Modal para la imagen -->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <a id="downloadBtn" href="{{ asset('img/' . $carrera['planEstudio']) }}" 
               download="{{ Str::slug($carrera['nombre']) }}_plan_estudio.png" 
               class="download-button">
                Descargar Foto
            </a>
            <img class="modal-content" id="modalImage">
        </div>
    </div>
</section>
@endsection

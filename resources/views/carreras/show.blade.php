@extends('layouts.app')

@section('title', 'ISFDCyT - ' . $carrera['nombre'])
@section('headerId', '')

@section('content')
<style>
.interesado-modal {
    display: none;
    position: fixed;
    z-index: 10000;
    inset: 0;
    background: rgba(0,0,0,0.6);
}

.modal-content-interesado {
    background: #fff;
    width: 450px;
    padding: 25px;
    margin: 8% auto;
    border-radius: 8px;
    position: relative;
}

.cerrar-modal-interesado {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 24px;
    cursor: pointer;
}

.modal-content-interesado input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
}

.btn-enviar-interesado {
    width: 100%;
    background: #1e73be;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 6px;
}

.msg-exito {
    color: green;
    margin-top: 15px;
    font-weight: bold;
}

</style>
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
    <!-- <div class="container-btn-down">
        <a href="#informacion-carrera" class="btn-down">
            <svg class="svg-arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <path d="M50.5,19.881c-1.104,0-2,0.896-2,2V72.17L33.193,56.609c-0.781-0.781-1.922-0.781-2.703,0 
                c-0.781,0.78-0.719,2.047,0.062,2.828l18.883,18.857c0.375,0.375,0.899,0.586,1.43,0.586s1.047-0.211,1.422-0.586l18.857-18.857 
                c0.781-0.781,0.783-2.048,0.002-2.828c-0.781-0.781-2.296-0.781-3.077,0L52.5,71.933V21.881
                C52.5,20.776,51.604,19.881,50.5,19.881z"></path>
            </svg>
        </a>
    </div> -->
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
    </div>

    {{-- Contenido principal --}}
    <div class="detalle-contenido container">
        {{-- Columna izquierda: Detalles --}}
        <div class="detalle-info">
    <div class="info-carrera">
        <h5>Detalles de la Carrera</h5>
        <ul>
            <li><strong>Resolución:</strong> {{ $carrera['resolucion'] }}</li>
            <li><strong>Periodo Escolar:</strong> {{ $carrera['periodo'] }}</li>
        </ul>

        <!-- Botón para ver el plan de estudios -->
        <button id="verPlanEstudioBtn" class="btn-plan-estudio">
            Ver Plan de Estudios
        </button>
    </div>
</div>

<!-- Modal del Plan de Estudio -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <a id="downloadBtn" 
       href="{{ asset('img/' . $carrera['plan_estudio']) }}" 
       download="{{ Str::slug($carrera['nombre']) }}_plan_estudio.png" 
       class="download-button">
        Descargar Plan
    </a>
    <img 
        src="{{ asset('img/' . $carrera['plan_estudio']) }}" 
        alt="Estructura curricular de {{ $carrera['nombre'] }}"
        class="modal-content" 
        id="modalImage">
</div>


        {{-- Columna derecha: Preinscripción --}}
        <div class="cont-btn-incripcion">
            <h5 class="subtitulo">Preinscripción</h5>
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
            <a href="https://www.formosa.gob.ar/educacion/preinscripcioneducacionsuperior" 
               target="_blank" class="btn-incripcion">
                Preinscripción Online
            </a>
            <!-- Botón nuevo -->
            <button class="btn-incripcion btn-interesado" id="btnInteresado">
                Estoy interesado en inscribirme
            </button>

        </div>
    </div>
</section>
<!-- Modal -->
<div id="modalInteresado" class="interesado-modal">
    <div class="modal-content-interesado">
        <span class="cerrar-modal-interesado">&times;</span>
        <h3>Registro de interés</h3>

        <form id="formInteresado">
            <input type="hidden" name="carrera" value="{{ $carrera->nombre }}">

            <label class="form-label">Nombre completo</label>
            <input class="form-control" type="text" name="nombre" required>

            <label class="form-label">DNI</label>
            <input class="form-control" type="text" name="dni" required>

            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email" required>

            <label class="form-label">Teléfono</label>
            <input class="form-control" type="text" name="telefono" required>

            <button type="submit" class="btn-enviar-interesado">
                Enviar
            </button>
        </form>

        <p id="msgInteresado" class="msg-exito" style="display:none;">
            ¡Gracias! Te avisaremos cuando se habilite la inscripción.
        </p>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("imageModal");
    const btn = document.getElementById("verPlanEstudioBtn");
    const closeBtn = document.querySelector(".close");

    // Abrir modal
    btn.addEventListener("click", function() {
        modal.style.display = "flex";
        modal.style.flexDirection = "column";
        modal.style.alignItems = "center";
    });

    // Cerrar modal con la X
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Cerrar clickeando fuera de la imagen
    window.addEventListener("click", function(e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});


// ----- ELEMENTOS -----
const btnInteresado = document.getElementById("btnInteresado");
const modalInteresado = document.getElementById("modalInteresado");
const cerrarModalInteresado = document.querySelector(".cerrar-modal-interesado");
const formInteresado = document.getElementById("formInteresado");
const msgInteresado = document.getElementById("msgInteresado");

// Abrir modal
btnInteresado.addEventListener("click", () => {
    modalInteresado.style.display = "block";
});

// Cerrar modal
cerrarModalInteresado.addEventListener("click", () => {
    modalInteresado.style.display = "none";
});

// Click afuera
window.addEventListener("click", (e) => {
    if (e.target === modalInteresado) modalInteresado.style.display = "none";
});

// Enviar datos vía AJAX
formInteresado.addEventListener("submit", async (e) => {
    e.preventDefault();

    const datos = new FormData(formInteresado);

    const response = await fetch("{{ route('interesados.guardar') }}", {
        method: "POST",
        headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
        body: datos
    });

    const result = await response.json();

    if (result.success) {
        formInteresado.reset();
        msgInteresado.style.display = "block";

        setTimeout(() => {
            msgInteresado.style.display = "none";
            modalInteresado.style.display = "none";
        }, 2000);
    }
});

</script>

@endsection

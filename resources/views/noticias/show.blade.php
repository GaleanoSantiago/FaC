@extends('layouts.app')

@section('title', "ISFDCyT - " . $noticia['titulo'])
@section('headerId', 'header_single_news')

@section('content')
<section class="" id="noticia-single">
    <div class="container bloq-cont bloq-news">
        <div class="flecha_back">
            <a href="/noticias" class="btn btn-back"><i class="fa-solid fa-chevron-left"></i> Volver</a>
        </div>
        <div class="card-news-single">
            <div class="titles_container">

                <h1 class="title_news">{{ $noticia['titulo'] }}</h1>
                <h4 class="subtitle_news">{{ $noticia['subtitulo'] }}</h4>
                <div class="container-fecha-news">
                    <span class="news-fecha">
                        {{ \Carbon\Carbon::parse($noticia['created_at'])->translatedFormat('d \d\e F \d\e Y - H:i') }}
                    </span>

                </div>
            
            </div>
            <div class="img-container-singleNews">

                <div class="img-card-news">
                    <img src="{{ asset($noticia['imagen']) }}" alt="{{ $noticia['titulo'] }}">
                </div>
            </div>
            <div class="card-body-news">
                <div class="container-redes">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/?text={{ urlencode($noticia['titulo'] . ' ' . url()->current()) }}" 
                    target="_blank" 
                    class="item-shares">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                    target="_blank" 
                    class="item-shares">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($noticia['titulo']) }}&url={{ urlencode(url()->current()) }}" 
                    target="_blank" 
                    class="item-shares">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <!-- Enlace directo (copiar al portapapeles) -->
                    <a href="#" 
                    class="item-shares" 
                    onclick="copyLink(event)">
                        <i class="fa-solid fa-link"></i>
                    </a>

                    <!-- Correo -->
                    <a href="mailto:?subject={{ urlencode($noticia['titulo']) }}&body={{ urlencode('Te comparto esta noticia: ' . url()->current()) }}" 
                    target="_blank" 
                    class="item-shares">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                <div class="contenido-noticia">
                    {!! nl2br(e($noticia['contenido'])) !!}
                </div>
                
            </div>
        </div>
    </div>
</section>
<section id="noticias" class="secondary-news">
    <div class="container">
        <h2>Ultimas Noticias</h2>
        <div class="row container-news">
            
            <div class="card-carreras card-news">
                <div class="img-card-carrera ">
                    <img src="{{ asset('img/feria.jpeg') }}" alt="Tecnicatura Superior en Desarrollo de Software">
                </div>
                <div class="card-body-carrera ">
                    <div class="container-fecha">
                        <span class="news-fecha">21-09-2025</span>

                    </div>
                    <h5>Estudiantes del último año destacan en la Feria Regional de Innovación</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit sapiente excepturi!...</p>
                    <div class="container-btn">
                        <a href="" class="btn btn-main">Leer más <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-carreras card-news">
                <div class="img-card-carrera ">
                    <img src="{{ asset('img/ecologico.jpg') }}"  alt="Tecnicatura Superior en Administración de Sistemas y Redes">
                </div>
                <div class="card-body-carrera ">
                    <div class="container-fecha">
                        <span class="news-fecha">15-09-2025</span>

                    </div>
                    <h5>Campaña ecológica: alumnos promueven el reciclaje en toda la comunidad</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit sapiente excepturi!...</p>
                    <div class="container-btn">
                        <a href="" class="btn btn-main">Leer más <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-carreras card-news">
                <div class="img-card-carrera ">
                    <img src="{{ asset('img/instituto.jpg') }}" alt="Tecnicatura Superior en Administración de Empresas con Orientación a PyMES">
                </div>
                <div class="card-body-carrera ">
                    <div class="container-fecha">
                        <span class="news-fecha">10-09-2025</span>

                    </div>
                    <h5>Se abren las inscripciones para los cursos extracurriculares 2025</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit sapiente excepturi!...</p>
                    <div class="container-btn">
                        <a href="" class="btn btn-main">Leer más <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<script>
function copyLink(e) {
    e.preventDefault();
    const link = window.location.href;
    navigator.clipboard.writeText(link).then(() => {
        alert('Enlace copiado al portapapeles');
    });
}
</script>
@endsection

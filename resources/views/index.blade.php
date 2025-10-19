<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISFDCyT - Felix Atilio Cabrera</title>
    <link rel="icon" href="{ asset('img/logo.png') }}">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
    <!-- Animaciones AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS Propios -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/52ab3134b2.js" crossorigin="anonymous"></script>
</head>
<body>
        <!------------------------------------------- Inicio -------------------------------------------->
    <header id="index-header">
       
        <!----------------------------------------- CARRUSEL----------------------------------------->
       <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('img/instituto3.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/inscripcion_slide.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/software_slide.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/ingles2_slide.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main>
        <!----------------------------------------- Informacion ----------------------------------------->
     <section id="informacion" class="info-section">
  <div class="container bloq-cont">
    <h2>Información Sobre la Institución</h2>
    <div class="container texto-info">
      <p>
        El Instituto Superior de Formación Docente Continua y Técnica 
        «Félix Atilio Cabrera» viene desarrollando desde hace más de 
        cuatro décadas una labor fundamental en la formación de niños, 
        jóvenes y adultos en toda la provincia de Formosa, así como en 
        capacitación docente y técnica. <strong>De gestión Estatal, 
        este instituto tiene como objetivo principal brindar una educación 
        de calidad a sus estudiantes para que puedan desempeñarse de manera 
        efectiva en su rol.</strong>
      </p>
      <p>
        Además de la formación académica, el Instituto Superior Formación Docente 
        Y Técnica <strong>«Félix Atilio Cabrera» </strong>también tiene la responsabilidad de 
        fomentar la investigación y la innovación en el campo de la educación, y 
        de ofrecer programas de capacitación continua para los docentes y técnicos que ya se 
        encuentran en ejercicio.
      </p>
      <p>
        Esta institución pionera en la educación mantiene vigente la estructura 
        inicial: <br>conviven en la misma el nivel superior y tres departamentos de 
        aplicación: inicial, primario y medio. 
      </p>
      <p>
        El Jardín de Infantes Funciona en Horarios del Turno Mañana y Tarde en 
        su propio edificio ingresando por la calle Fortín Yunka 1.190
      </p>
      <h5>
        Más de mil alumnos recorren las aulas diariamente, distribuidos en tres turnos:
        </h5>
      <ul>
        <li><span class="text-resaltado">Turno Mañana:</span> 07:15 a 12:30 hs Funciona el Nivel Secundario</li>
        <li><span class="text-resaltado">Turno Tarde:</span> 01:15 a 18:00 hs Funciona el Nivel Primario</li>
        <li><span class="text-resaltado">Turno Noche:</span> 19:00 a 23:00 hs. Funciona el Nivel Terciario</li>
      </ul>
    <div class="boton-conocer">
  <a href="#!" class="btn-conocer">Conocer más</a>
    </div>
    </div>
  </div>
</section>


        <!------------------------------------------ Ubicacion ------------------------------------------>
        <section id="ubicacion" class="ubicacion-section">
            <div class="container">
                <div class="row bloq-cont">
                    <div class="col-12">
                         <h2>Ubicación</h2>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14320.829546672081!2d-58.18692315514238!3d-26.189931178485736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e2c1814cd3%3A0x6165c864d60268e8!2sInstituto%20Superior%20Docente%20-%20F%C3%A9lix%20Atilio%20Cabrera%20-%20Formosa!5e0!3m2!1ses-419!2sus!4v1699157127922!5m2!1ses-419!2sus" 
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class=" col-lg-3 col-md-3 col-sm-12 col-12 ubi-contenido">
                        <div class="mb-2">
                            <p><span class="text-resaltado">Ubicación</span><br>
                            Formosa - Formosa Capital</p>
                        </div>
                        <div class="mb-2">
                            <p>
                                <span class="text-resaltado ">Dirección</span><br>
                                Cordoba 1125
                            </p>
                        </div>
                        <div class="mb-2">
                            <p>
                                <span class="text-resaltado ">Codigo Postal</span><br>
                                P3600
                            </p>
                        </div>
                        <div class="mb-2">
                            <p>
                                <span class="text-resaltado ">Telefono</span><br>
                                [Numero telefonico]
                            </p>
                        </div>
                        <div class="mb-2">
                            <p>
                                <span class="text-resaltado ">Redes Sociales</span><br>
                                <a href="https://www.facebook.com/tu_pagina" target="_blank" title="Facebook"><i class="fa fa-facebook"></i> </a>
                                <a href="https://www.instagram.com/isfdyt_fac/" target="_blank" title="Instagram Felix Atilio Cabrera"><i class="fa fa-instagram"></i></a>
                            </p>
                        </div>
                        <div class="boton-conocer">
                        <a href="#!" class="btn-conocer">Contacto</a>
                         </div>
                    </div>
                </div>

            </div>
        </section>
        <!------------------------------------------ Carreras ------------------------------------------>
        <section id="carreras">
            <div class="container">
                <h2>Carreras</h2>
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                        <a href="./carreras.html?id=1">
                            <div class="card-carreras">
                                <div class="img-card-carrera ">
                                    <img src="{{ asset('img/ingles.jpg') }}" alt="Profesorado de inglés Felix atilio cabrera">
                                    
                                </div>
                                <div class="card-body-carrera ">
                                    <h5>Profesorado de Inglés</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                        <a href="./carreras.html?id=2">
                            <div class="card-carreras">
                                <div class="img-card-carrera ">
                                    <img src="{{ asset('img/software.jpg') }}" alt="Tecnicatura Superior en Desarrollo de Software">
                                </div>
                                <div class="card-body-carrera ">
                                    <h5>Tecnicatura Superior en Desarrollo de Software</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                        <a href="./carreras.html?id=3">
                            <div class="card-carreras">
                                <div class="img-card-carrera ">
                                    <img src="{{ asset('img/redes.jpg') }}"  alt="Tecnicatura Superior en Administración de Sistemas y Redes">
                                </div>
                                <div class="card-body-carrera ">
                                    <h5>Tecnicatura Superior en Administración de Sistemas y Redes</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                        <a href="./carreras.html?id=4">
                            <div class="card-carreras">
                                <div class="img-card-carrera ">
                                    <img src="{{ asset('img/pymes.jpg') }}" alt="Tecnicatura Superior en Administración de Empresas con Orientación a PyMES">
                                </div>
                                <div class="card-body-carrera ">
                                    <h5>Tecnicatura Superior en Administración de Empresas con Orientación a PyMES</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                        <a href="./carreras.html?id=5">
                            <div class="card-carreras">
                                <div class="img-card-carrera ">
                                    <img src="{{ asset('img/economia.jpg') }}" alt="Profesorado en Economia">
                                </div>
                                <div class="card-body-carrera ">
                                    <h5>Profesorado en Economía</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                        <a href="./carreras.html?id=6">
                            <div class="card-carreras">
                                <div class="img-card-carrera ">
                                    <img src="{{ asset('img/ciencias_educacion.jpg') }}" alt="Profesorado en Ciencias en la Educación">
                                </div>
                                <div class="card-body-carrera ">
                                    <h5>Profesorado en Ciencias de la Educación</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="cont-btn-incripcion bloq-cont">
                    <h3 class="subtitulo">PREINSCRIPCIÓN A LAS CARRERAS</h3>
                    <ul>
                        <li>La preinscripción online se encuentra disponible desde noviembre hasta enero. <span class="text-resaltado">Actualmente no se encuentra habilitado.</span></li>
                        <li>Todas las carreras pueden preinscribirse a través de la misma página web.</li>
                        <li>La preinscripción a las carreras terciarias se realiza únicamente desde el sitio web.</li>
                        <li>Si desea conocer mas información acerca de las carreras puede acercarse a la institución
                            a partir de las 19:00 hs. 
                        </li>
                    </ul>
                    <a href="https://www.formosa.gob.ar/educacion/inscripcioneducacionsuperior" target="_blank" class="btn-incripcion">
                        Preinscripción Online
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Boton para volver a arriba -->
        <a href="#" class="btn-scrollTop" id="btnScrollTop">
            <svg viewBox="0 -4.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"> 
                <title>arrow_up [#337]</title> 
                <desc>Created with Sketch.</desc> 
                <defs> </defs> 
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                <g id="Dribbble-Light-Preview" transform="translate(-260.000000, -6684.000000)"> 
                <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M223.707692,6534.63378 L223.707692,6534.63378 C224.097436,6534.22888 224.097436,6533.57338 223.707692,6533.16951 L215.444127,6524.60657 C214.66364,6523.79781 213.397472,6523.79781 212.616986,6524.60657 L204.29246,6533.23165 C203.906714,6533.6324 203.901717,6534.27962 204.282467,6534.68555 C204.671211,6535.10081 205.31179,6535.10495 205.70653,6534.69695 L213.323521,6526.80297 C213.714264,6526.39807 214.346848,6526.39807 214.737591,6526.80297 L222.294621,6534.63378 C222.684365,6535.03868 223.317949,6535.03868 223.707692,6534.63378" id="arrow_up-[#337]"> 
                </path> 
                </g> 
                </g> 
                </g> 
                </g>
                </svg>
        </a>
        <section class="contenido-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                        <div class="cont-img-footer">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo escudo felix atilio cabrera">
                            <p class=""><span class="">Instituto Superior de Formación Docente Continua y Técnica</span> <br> Felix Atilio Cabrera</p>
                        </div>
                        <div class="info-footer">
                            <p>
                                El Instituto Superior de Formación Docente Continua y Técnica 
                                "Félix Atilio Cabrera" de gestión Estatal, con más de cuatro 
                                décadas de experiencia, cumple un papel fundamental en la 
                                formación de niños, jóvenes y adultos en la provincia de Formosa. 
                                Su misión principal es proporcionar educación de calidad, capacitación 
                                docente y técnica. Busca equipar a los estudiantes con las habilidades 
                                necesarias para desempeñarse eficazmente como docentes, abarcando el diseño 
                                y ejecución de planes de estudio, la evaluación del rendimiento estudiantil, 
                                y la promoción de un entorno educativo inclusivo y colaborativo.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 second-col-footer">
                        <div class="redes-footer">
                            <a href="https://www.instagram.com/isfdyt_fac/" target="_blank" 
                                title="Instagram Felix Atilio Cabrera">
                                <i class="fa fa-instagram"></i> Instagram
                            </a>
                        </div>
                        <div class="contacto-footer">
                            <ul>
                                <li><i class="fa fa-location-dot"></i> Formosa Capital - Barrio Don Bosco - Cordoba 1125</li>
                                <li><i class="fa fa-phone"></i> 555 555 555</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 tercer-col-footer">
                        <h4>CARRERAS TERCIARIAS</h4>
                        <ul>
                            <li>La preinscripción online se encuentra disponible desde noviembre hasta enero.</li>
                            <li>Todas las carreras pueden preinscribirse a través de la misma página web.</li>
                            <li>La preinscripción a las carreras terciarias se realiza únicamente desde el sitio web.</li>
                            <li>Si desea conocer mas información acerca de las carreras puede acercarse a la institución
                                a partir de las 19:00 hs. 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright-footer">
            <div class="container-fluid">
                <p>Sitio Web Desarrollado por <a href="https://galeanosantiago.github.io/Portfolio/" target="_blank" class="text-warning">Galeano Santiago</a> </p>
            </div>
        </section>
    </footer>

    <!-- JS Propios -->
    <script src="{{ asset('js/front.js') }}"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <!-- Animaciones AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>        /*Inicializacion*/
        AOS.init({
            delay:150,
        });

    </script>
</body>
</html>
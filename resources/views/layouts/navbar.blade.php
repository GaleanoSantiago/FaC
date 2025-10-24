<nav>
            <div class="container-nav">
                <!-- LOGO -->
                <div class="cont-nav-logo">
                <img class="nav-icon" src="{{ asset('img/logo.png') }}" alt="logo felix atilio cabrera">
                <a href="{{ route('home') }}">ISFDCyT - Felix Atilio Cabrera</a>
                </div>

                <!-- BOTÓN HAMBURGUESA -->
                <button id="menu-toggle" class="menu-toggle" aria-label="Abrir menú" aria-controls="main-menu" aria-expanded="false">
                <!-- Ícono de menú (hamburguesa) -->
                <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>

                <!-- Ícono de cerrar (X) -->
                <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M6 6l12 12M6 18L18 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                </button>

                <!-- MENÚ -->
                <ul class="cont-ul" id="main-menu">
                <li>
                    <a href="{{ route('home') }}">
                    Inicio
                    </a>
                </li>

                <li>
                    <a href="#informacion">
                    @include('components.icons.info')
                    Información
                    </a>
                </li>

                <!-- DROPDOWN CARRERAS -->
                <li class="dropdown-lis">
                    <a href="#carreras">
                    @include('components.icons.carreras')
                    Carreras
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M17.9188 8.17969H11.6888H6.07877C5.11877 8.17969 4.63877 9.33969 5.31877 10.0197L10.4988 15.1997C11.3288 16.0297 12.6788 16.0297 13.5088 15.1997L18.6888 10.0197C19.3588 9.33969 18.8788 8.17969 17.9188 8.17969Z"
                        fill="#fff"></path>
                    </svg>
                    </a>

                    <ul class="ul-second">
                        <li><a href="{{ route('carreras.show', 1) }}">PROFESORADO EN INGLÉS</a></li>
                        <li><a href="{{ route('carreras.show', 2) }}">TECNICATURA SUPERIOR EN DESARROLLO DE SOFTWARE</a></li>
                        <li><a href="{{ route('carreras.show', 3) }}">TECNICATURA SUPERIOR EN ADMINISTRACIÓN DE SISTEMAS Y REDES</a></li>
                        <li><a href="{{ route('carreras.show', 4) }}">TECNICATURA SUPERIOR EN ADMINISTRACIÓN DE EMPRESAS CON ORIENTACIÓN A PYMES</a></li>
                        <li><a href="{{ route('carreras.show', 5) }}">PROFESORADO EN ECONOMÍA</a></li>
                        <li><a href="{{ route('carreras.show', 6) }}">PROFESORADO EN CIENCIAS DE LA EDUCACIÓN</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#institucional">
                    @include('components.icons.institucional')
                    Institucional
                    </a>
                </li>

                <li>
                    <a href="#ubicacion">
                    @include('components.icons.location')
                    Ubicación
                    </a>
                </li>

                

                <li>
                    <a href="#campus">
                    @include('components.icons.campus-icon')
                    Campus
                    </a>
                </li>
                </ul>
            </div>
         </nav>
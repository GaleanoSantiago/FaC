@extends('layouts.app')

@section('title', 'ISFDCyT - Institucional')

@section('content')
<style>
    .rounded img{
        width: 90px;              /* tamaño del círculo */
        aspect-ratio: 1 / 1;      /* mantiene forma cuadrada sin aplastarse */
        object-fit: cover;        /* recorta sin deformar */
        border-radius: 50%;       /* círculo perfecto */
    }
</style>

<div class="container-fluid container-institucional" >

    {{-- TITULO PRINCIPAL --}}
    <div class="hero_institucional row mb-5">
        <div class="col-12 text-center">
            <div class="d-flex justify-content-center">

                <div class="logo_institucion">
                    <img src="{{ asset('img/logo.png') }}" alt="felix atilio cabrera">
                </div>
            </div>
            <h1 class="mb-3 letra_hero">Institución</h1>
            <p class=" fs-5 letra_hero">
                Información institucional, autoridades y personal del ISFDCyT.
            </p>
        </div>
    </div>


    <section class="bloq-cont section_institucional">

    {{-- DIRECTIVOS --}}
    <article class="mb-5 ">
        <h2 class="mb-4 border-bottom pb-2">Equipo Directivo</h2>

        <div class="row gy-4">

            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/Julian_Bobadilla.webp') }}" class="rounded-circle me-4" alt="Director">
                    <div>
                        <h4 class="mb-1">Julian Bobadilla</h4>
                        <p class="text-muted mb-0">Director General</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/ferreyra.webp') }}" class="rounded-circle me-4" alt="Regente">
                    <div>
                        <h4 class="mb-1">Juan Ferreyra</h4>
                        <p class="text-muted mb-0">Regente Institucional</p>
                    </div>
                </div>
            </div>

        </div>
    </article>


    {{-- ADMINISTRATIVOS --}}
    <!-- <article class="mb-5">
        <h2 class="mb-4 border-bottom pb-2">Administración</h2>

        <div class="row gy-4">

            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/amargan_olga_ines.webp') }}" class="rounded-circle me-4" alt="Administración">
                    <div>
                        <h4 class="mb-1">Amargan Olga Inés</h4>
                        <p class="text-muted mb-0">Administración Institucional</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/Ayala_Myrian.webp') }}" class="rounded-circle me-4" alt="Secretaría Académica">
                    <div>
                        <h4 class="mb-1">Ayala Myrian</h4>
                        <p class="text-muted mb-0">Secretaría Académica</p>
                    </div>
                </div>
            </div>

        </div>
    </article> -->


    {{-- PRECEPTORES --}}
    <article class="mb-5">
        <h2 class="mb-4 border-bottom pb-2">Preceptores</h2>

        <div class="row gy-4">
            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/amargan_olga_ines.webp') }}" class="rounded-circle me-4" alt="Administración">
                    <div>
                        <h4 class="mb-1">Amargan Olga Inés</h4>
                        <p class="text-muted mb-0">Administración Institucional</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/Ayala_Myrian.webp') }}" class="rounded-circle me-4" alt="Secretaría Académica">
                    <div>
                        <h4 class="mb-1">Ayala Myrian</h4>
                        <p class="text-muted mb-0">Secretaría Académica</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/Almiron_Sonia_Vanesa.webp') }}" class="rounded-circle me-4" alt="Preceptor">
                    <div>
                        <h4 class="mb-1">Almiron Sonia Vanesa</h4>
                        <p class="text-muted mb-0">Preceptor</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="{{ asset('img/staff/Dario_Caceres.webp') }}" class="rounded-circle me-4" alt="Preceptor">
                    <div>
                        <h4 class="mb-1">Dario Caceres</h4>
                        <p class="text-muted mb-0">Preceptor</p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-4 d-flex">
                <div class="d-flex w-100 p-3 border rounded align-items-center">
                    <img src="https://user-images.githubusercontent.com/11250/39013954-f5091c3a-43e6-11e8-9cac-37cf8e8c8e4e.jpg" class="rounded-circle me-4" alt="Preceptor">
                    <div>
                        <h4 class="mb-1">Nombre del Preceptor</h4>
                        <p class="text-muted mb-0">Preceptor</p>
                    </div>
                </div>
            </div> -->

        </div>
    </article>
        <!-- Sección de Contacto y Redes -->
        <div class="contacto-institucional mt-5 p-4 border rounded shadow-sm">

        <h3 class="mb-4">Contacto Institucional</h3>

        <div class="row">
            <!-- Teléfonos -->
            <div class="col-md-4 d-flex flex-column mb-4">
                <h5 class="mb-2">Teléfonos</h5>
                <span class="text-muted">Administración: (370) 445-1234</span>
                <span class="text-muted">Dirección: (370) 445-5678</span>
                <span class="text-muted">Preceptoría: (370) 445-9012</span>
            </div>

            <!-- Correos -->
            <div class="col-md-4 d-flex flex-column mb-4">
                <h5 class="mb-2">Correos</h5>
                <span class="text-muted">info@instituto.edu.ar</span>
                <span class="text-muted">direccion@instituto.edu.ar</span>
                <span class="text-muted">administracion@instituto.edu.ar</span>
            </div>

            <!-- Redes Sociales -->
            <div class="col-md-4 d-flex flex-column mb-4">
                <h5 class="mb-2">Redes Sociales</h5>
                <a href="https://www.facebook.com/people/Isfdcyt-Nivel-Superior/61559515095922/" class="text-decoration-none text-muted mb-1">Facebook: Instituto Superior FDCyT</a>
                <!-- <a href="#" class="text-decoration-none text-muted mb-1">Instagram: @instituto_fdcyt</a> -->
                <!-- <a href="" class="text-decoration-none text-muted">YouTube: ISFDCyT Oficial</a> -->
            </div>
        </div>

        </div>
    </section>

</div>

@endsection

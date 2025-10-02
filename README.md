# Proyecto Laravel

Este repositorio contiene un proyecto Laravel con la estructura básica y algunas vistas personalizadas.  

> ⚠️ Nota: La base de datos se utiliza únicamente para que Laravel funcione correctamente; **el sistema no depende de datos reales**.

---

## Requisitos previos

- PHP >= 8.x
- Composer
- Servidor local (XAMPP, MAMP, Laravel Valet, etc.)
- MySQL o MariaDB

---

## Clonar el proyecto

    git clone https://github.com/GaleanoSantiago/FaC.git
    cd fac

## Cambiar a tu rama

    git checkout mi-rama

## Instalar dependencias

    composer install

## Configurar base de datos

1. Crear una base de datos vacía llamada laravel.

2. Ajustar las credenciales de la base de datos en .env si es necesario:

    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

3. Migrar base de datos

    php artisan migrate


Archivos principales del proyecto

Vistas:
    resources/views/index.blade.php
    resources/views/carreras.blade.php

Archivos públicos:
    public/css/ → estilos
    public/js/ → scripts
    public/img/ → imágenes

Rutas:
    routes/web.php  

Otros archivos importantes:

    .env → configuración del entorno

    composer.json → dependencias

    artisan → comandos de Laravel


## Levantar el servidor local  

    php artisan serve

Luego abrir en el navegador: http://127.0.0.1:8000

Con esto, el proyecto debería estar funcionando y listo para desarrollo en tu máquina.
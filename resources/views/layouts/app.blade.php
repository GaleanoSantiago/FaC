<!DOCTYPE html>
<html lang="es">
    @include('layouts.head')
<body>
    <header id="@yield('headerId', 'header_default')">
        {{-- @section('headerId', 'header_news') --}}
        <!-- Aquí va el navbar o menú -->
        @include('layouts.navbar') 
    </header>

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    
</body>
</html>

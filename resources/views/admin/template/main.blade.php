<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') | Admin </title>
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">

    <script src="{{ asset('plugin/jquery/js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap/js/bootstrap.js') }}"></script>

</head>
<body>
    {{-- Incluimos el nav de navegación   --}}
    @include('admin.template.partials.nav')
    
    {{-- Incluimos mediante el yield, el contenido de welcome --}}
    <section class="section">
        @yield('content')
    </section>  

    <footer class="footer">
        @include('admin.template.partials.footer')
    </footer> 


</html>
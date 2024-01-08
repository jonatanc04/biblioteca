<html>
    <head>
        <title>
        @yield('titulo')
        </title>
        <link rel="stylesheet" href="./css/app.css">
    </head>
    <body>
        @include('partials.nav')
        @yield('contenido')
    </body>
</html>
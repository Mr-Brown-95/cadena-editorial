<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>
<h1 class="bg-secondary text-white text-center mb-3">Laravel</h1>
<ul class="nav nav-tabs" >
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/branches">Sucursal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/employs">Empleado</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/journalists">Periodista</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/magazines">Revista</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/branche_magazines">Sucursal Publica Revista</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/copies">Ejemplar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/sections">Seccion</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/journalist_magazines">Periodista Escribe Revista</a>
    </li>
</ul>

<div class="container"> @yield('contenido')</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@yield('js')
</body>
</html>

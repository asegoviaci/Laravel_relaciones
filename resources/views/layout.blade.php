<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/usuario">Usuario</a></li>
            <li><a href="/direccion">Dirección</a></li>
            <li><a href="/asignar">Asignar</a></li>
            <li><a href="/post">Post</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>
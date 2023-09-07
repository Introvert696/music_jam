<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Music_jam</title>
</head>

<body>


    <header class="container d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img class="ms-2" src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo" width="90"
                height="32">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item "><a href="{{ route('main') }}" class="nav-link " aria-current="page">Главная</a></li>
            <li class="nav-item "><a href="{{ route('upload') }}" class="nav-link " aria-current="page">Загрузить</a>
            </li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>

        </ul>

    </header>


    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <style>

    </style>
</body>

</html>

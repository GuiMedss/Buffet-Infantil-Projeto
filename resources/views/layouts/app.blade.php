<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body style="background-color: midnightblue;">
    <div id="app">
        <nav class="navbar">
            <div class="container-fluid d-flex justify-content-between">
                <div>
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('logo.jpeg')}}" alt="Logo" width="80" class="d-inline-block align-text-top">
                        <h1 style="color: darkorange; float: right;">
                            Space<br>
                            Adventure
                        </h1>
                    </a>
                </div>
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{route('user.pesquisa')}}" type="button" class="btn btn-outline-primary">Pesquisa de satisfação</a>
                    <a href="{{route('user.reserva.create')}}" type="button" class="btn btn-outline-primary">Solicite sua festa</a>
                    @if (Auth::user())
                        <a href="{{route('user.reserva.index')}}" type="button" class="btn btn-outline-primary"><ion-icon name="person-circle-outline"></ion-icon> {{Auth::user()->name}}</a>
                        <a href="{{route('logout')}}" type="button" class="btn btn-outline-danger"><ion-icon name="exit-outline"></ion-icon></a>
                    @else
                        <a href="{{route('login')}}" type="button" class="btn btn-outline-primary"></a>
                    @endif
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            {{-- Bootstrap --}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            {{-- Ion Icon --}}
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </footer>
    </div>
</body>
</html>

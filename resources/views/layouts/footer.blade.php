<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body>
    <footer class="fixed-bottom ">
        <div class="card border-0">
            
            <div class="card-body border-0 bg-info">
                <blockquote class="blockquote mb-0 text-center border-0 bg-info text-dark">
                    <p><b>TOKO ELEKTRONIK FARDAN</b></p>
                </blockquote>
            </div>
        </div>
    </footer>
</body>

</html>

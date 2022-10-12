<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Doonamis</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('build/assets/app.525f5899.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('build/assets/app.3afb5c9c.js') }}"></script>
    </head>
    <body class="antialiased">
        <div class="container mt-4">
            <div class="row mt-4" id="publications-content"></div>
        </div>
        <nav class="mt-4">
            <ul class="pagination justify-content-center" id="publications-pagination"></ul>
        </nav>
    </body>
</html>

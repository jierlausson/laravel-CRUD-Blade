<!doctype html>
<html lang="pt-BR">

<head>
    <title>Larvel CRUD Blade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="h-screen bg-gradient-to-br from-gray-100 to-indigo-300">
        <div class="container mx-auto mt-4">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

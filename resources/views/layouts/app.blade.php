<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dar-Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">
</head>

<body id="top" class="bg-background-light font-display text-slate-900 transition-colors duration-300">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>

</html>

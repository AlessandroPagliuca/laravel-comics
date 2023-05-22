<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="bg-primary">
        <!-- dc power visa additional dc sites -->
        <div class="d-flex justify-content-end align-items-center me-5">
            <div class="text-uppercase text-white px-4">dc power visa</div>
            <div class="text-uppercase text-white px-4">additional dc sites</div>
        </div>
        <!-- navbar -->
        <nav>
            <div class="box-logo">
                <img src="{{ asset('resources/img/dc-logo.png') }}" alt="dc-comics">
            </div>
        </nav>
    </header>
    <main class="bg-light">
        <div class=" ">
            <div class="text-uppercase text-white">dc power visa</div>
            <div class="text-uppercase text-white">additional dc sites</div>

        </div>
    </main>

</body>

</html>

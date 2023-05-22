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
    <header>
        <!-- dc power visa additional dc sites -->
        <div class="bg-primary">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="text-uppercase text-white px-4">dc power visa</div>
                <div class="text-uppercase text-white px-4">additional dc sites</div>
            </div>
        </div>
        <!-- navbar -->
        <nav class="py-2">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="box-logo">
                    <img src="{{ asset('resources/img/dc-logo.png') }}" alt="dc-comics">
                </div>

                <ul class="d-flex">
                    @foreach ($data as $key => $value)
                        <li>{{ $value }}</li>
                    @endforeach
                </ul>
            </div>



        </nav>
    </header>


</body>

</html>

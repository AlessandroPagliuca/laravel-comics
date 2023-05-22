<header>
    <!-- dc power visa additional dc sites -->
    <div class="bg-primary box-visa">
        <div class="container d-flex justify-content-end align-items-center">
            <div class="text-uppercase text-white px-4">dc power visa</div>
            <div class="text-uppercase text-white px-4">additional dc sites</div>
        </div>
    </div>
    <!-- navbar -->
    <nav class="py-4">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="box-logo">
                <img src="{{ asset('resources/img/dc-logo.png') }}" alt="dc-comics">
            </div>

            <ul class="d-flex">
                @foreach ($data as $value)
                    <li class="text-uppercase fw-semibold">{{ $value }}</li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
<div id="hero">
    <img src=" {{ asset('resources/img/jumbotron.jpg') }} " alt="">
</div>

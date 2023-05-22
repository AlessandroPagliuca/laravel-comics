@extends('layouts.app')

@section('content')
    <h1>prova</h1>
    <div class="bg-dark">
        <div class="container d-flex justify-content-start">
            <div class="row">
                @foreach ($products['products'] as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center">
                        <div class="card m-2" style="width: 14rem; height: 14rem;">
                            <img class="card-img-top" src=" {{ $product['thumb'] }}" alt="{{ $product['series'] }}">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $product['series'] }} </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center py-3">
            <button class="btn btn-primary text-uppercase text-white fs-6">load more</button>
        </div>
    </div>
    <div class="w-100 bg-primary">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-4 col-md-3 col-lg-auto d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">digital comics</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">dc merchandise</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">subscriptions</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">comic shop locator</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">dc power visa</div>
                </div>

            </div>
        </div>
    </div>
@endsection

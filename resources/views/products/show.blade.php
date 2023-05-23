@extends('layouts.app')

@section('content')
    <h1>fumetti</h1>


    <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center">

        <div class="card m-2" style="width: 14rem; height: 14rem;">
            <img class="card-img-top" src="{{ $product['thumb'] }}" alt="{{ $product['series'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product['title'] }}</h5>
                <p class="card-text">{{ $product['description'] }}</p>
                <p class="card-text"><strong>Price:</strong> {{ $product['price'] }}</p>
                <p class="card-text"><strong>Series:</strong> {{ $product['series'] }}</p>
                <p class="card-text"><strong>Sale Date:</strong> {{ $product['sale_date'] }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $product['type'] }}</p>
            </div>
        </div>

    </div>
@endsection

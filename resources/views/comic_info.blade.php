@extends('layouts.app')

@section('title')
DC | Info Comic
@endsection


@section('main_content')
<div class="product_wrapper">
    <img src="{{ $single_comic['thumb'] }}" alt="">
    <div class="container">       
        <div>
            <h1>{{ $single_comic['title'] }}</h1>
            
            <div class="green-section">
                <div>
                    <p>U.S. Price:</p>
                    <p>{{ $single_comic['price'] }}</p>
                    <p>AVAILABLE</p>
                </div>
                <div>
                    <p>Check Availability</p>
                </div>
            </div>
            <p class="description">{{ $single_comic['description']}}</p>
        </div>

        <div class="advertisement">
            <p>ADVERTISEMENT</p>
            <img src="{{ asset('img/adv.jpg')}}" alt="">
        </div>

    </div>
</div>

<div class="btm_product">
    <div class="container">
        <div class="left-info">
            <h1>Talent</h1>
            <div>
                <h2>Art by:</h2>
                @foreach ($single_comic['artists'] as $artist)
                    <p>{{ $artist }}, </p>        
                @endforeach
            </div>
            <div>
                <h2>Written by:</h2>
                @foreach ($single_comic['writers'] as $writer)
                    <p>{{ $writer }}, </p>        
                @endforeach
            </div>
        </div>

        <div class="right-info">
            <h1>Specs</h1>
            <div>
                <h2>Series:</h2>
                <p>{{ $single_comic['series']}}</p>
            </div>
            <div>
                <h2>U.S. Price:</h2>
                <p>{{ $single_comic['price']}}</p>
            </div>
            <div>
                <h2>On Sale Date:</h2>
                <p>{{ $single_comic['sale_date']}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
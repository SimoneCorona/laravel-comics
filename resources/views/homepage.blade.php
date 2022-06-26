@extends('layouts.app')

@section('title')
    DC Comics | Homepage    
@endsection

@section('main_content')
    <div class="container">
       <div class="wrapper">
            @foreach ($data as $comic) 
                <div class="productsInfo">
                    <img :src="{{ $comic['thumb'] }}" alt="">
                    <p>{{ $comic['series'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

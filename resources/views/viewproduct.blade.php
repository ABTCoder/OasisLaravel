@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/viewproduct.css') }}" >
@endsection

@section('content')

@isset($product)
<div class="view_box">
            <div id="prod_img">
                @include('helpers/imgProducts', ['imgFile' => $product->immagine])
            </div>
            <div id="nameandprice">
                <div id="nameandbrand">
                    <h1 id="prod_name"> {{ $product->nome }} </h1>
                    <span id="prod_brand"> Marca: </span>
                    <span id="brand"> {{ $product->marca }} </span>
                </div>
                <div id="price"> @include('helpers/priceProducts') </div>
            </div>
            <div id="prod_code">
                <span> Codice Articolo: </span>
                <span id="code"> {{ $product->codice }} </span>
            </div>
            <hr>
            <div id="description">
                {{ $product->desc_esaustiva }}
            </div>
            <a id="buy" href="{{ route('howtobuy') }}"> come acquistare </a>
        </div>
@endisset

@endsection
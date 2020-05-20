@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="searchandbox">
        <form class="search_bar">
            <input type="text" placeholder="Ricerca">
            <input type="submit" value="Cerca">
        </form>
        <div class="list_box">
            <h1 id="title"> Seleziona il prodotto </h1>
            @isset($products)
            <hr>
            @foreach ($products as $product)
            <div class="productrow">
                <div id="immagine">
                    @include('helpers/imgProducts', ['imgFile' => $product->immagine])
                </div>
                <div id="info">
                    <h1 id="name"> {{ $product->nome }} </h1>
                    <h3 id="code"> Codice prodotto:  {{ $product->codice }} </h3>
                    <h3 id="description"> {{ $product->desc_breve }} </h3>
                </div>
                <div id="price"> @include('helpers/priceProducts') </div>
            </div>
            <hr>
            @endforeach
            @endisset
        </div>
    </div>
</div>
@endsection
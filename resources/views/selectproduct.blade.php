@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >
@endsection

@section('content')
<div class="staff_main">
            <div class="staff_sidenav">
                <div class="staffnav_items">
                    <a href="#addcat"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi categoria</a><br>
                    <a href="#addsub"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi sottoategoria</a><br>   
                    <a href="#addprod"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi prodotto</a><br>   
                    <a href="#editcat"><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica categoria</a><br>   
                    <a><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica sottocategoria</a><br>   
                    <a href="{{ route('selectproduct') }}"><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica prodotto</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina categoria</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina sottocategoria</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina prodotto</a><br>
                </div>
            </div>
            <div class="searchandbox">
                <form class="search_bar">
                    <input type="text" placeholder="Ricerca">
                    <input type="submit" value="Cerca">
                </form>
                <div class="list_box">
                    <h1 id="title"> Seleziona il prodotto </h1>
                    @isset($products)
                    @foreach ($products as $product)
                    <div class="productrow">
                        @include('helpers/imgProducts', ['imgFile' => $product->immagine])
                        <div id="info">
                            <h1 id="name"> {{ $product->nome }} </h1>
                            <h3 id="code"> codice prodotto:  {{ $product->codice }} </h3>
                            <h3 id="description"> {{ $product->desc_breve }} </h3>
                        </div>
                        <h3 id="price"> {{ $product->prezzo }}€ </h3>
                    </div>
                    <hr>
                    @endforeach
                    @endisset
                </div>
            </div>
        </div>
@endsection
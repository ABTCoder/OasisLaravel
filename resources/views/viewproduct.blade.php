@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/viewproduct.css') }}" >
@endsection

@section('content')
<div class="view_box">
            <img id="prod_img" src="{{ asset('images/ui_images/rick.gif') }}">
            <div id="nameandprice">
                <div id="price"> $999,99 </div>
                <div id="nameandbrand">
                    <h1 id="prod_name"> Rick </h1>
                    <span id="prod_brand"> Marca: </span>
                    <span id="brand"> oasis inc. </span>
                </div>
            </div>
            <div id="prod_code">
                <span> Codice Articolo: </span>
                <span id="code"> N3V3R60NN461V3Y0UUP </span>
            </div>
            <hr>
            <div id="description">Richard Paul Astley (Newton-le-Willows, 6 febbraio 1966) è un cantautore, musicista e conduttore radiofonico britannico.

Scoperto artisticamente e prodotto dal trio Stock, Aitken & Waterman, ha realizzato sotto la loro influenza i suoi primi due album, composti da brani pop dance. Il suo particolare timbro vocale ha fatto di lui uno dei principali interpreti musicali maschili della sua generazione.

Le vendite complessive dei suoi dischi, tra singoli e album, si aggirano sui 40 milioni di copie.

Dal 2007 il videoclip del suo singolo Never Gonna Give You Up è diventato oggetto di un fenomeno di internet noto come "Rickrolling".
            </div>
            <a id="buy" href="{{ route('howtobuy') }}"> come acquistare </a>
        </div>
@endsection
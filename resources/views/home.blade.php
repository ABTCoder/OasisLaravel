@extends('layouts.public')

@section('title', 'Home')

@section('content')
<div class="home_box">
    <img id="coverpic" src="{{ asset('images/ui_images/oasis_home.jpg') }}">
    <div class="mission_content">
        <h1 class="mission_title">Il miglior catalogo di articoli di elettronica</h1>
        <h4 class="mission">Questo sito offre un catalogo, con una vasta gamma di prodotti elettronici. <br>
            Lo scopo di questo sito è quello di offrire agli utenti una visualizzazione rapida e ben organizzata <br>
            dei prodotti in magazzino, 
            con la possibilità di cercare un determinato prodotto che si desidera acquistare.</h4>
    </div>
</div>
@endsection
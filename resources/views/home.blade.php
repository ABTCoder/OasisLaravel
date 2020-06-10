@extends('layouts.public')

@section('title', 'Home')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/slider.css') }}" >

@endsection

@section('content')
<div class="home_box">
    <div id="slide" class="coverpic">
        <ul>	
            <li><a href="javascript:;"><img  src="{{ asset('images/ui_images/oasis_home.jpg') }}"/></a></li>
            <li><a href="javascript:;"><img  src="{{ asset('images/ui_images/slideshow1.jpg') }}"/></a></li>
            <li><a href="javascript:;"><img  src="{{ asset('images/ui_images/slideshow2.jpg') }}"/></a></li>
            <li><a href="javascript:;"><img  src="{{ asset('images/ui_images/slideshow3.jpg') }}"/></a></li>
            <li><a href="javascript:;"><img  src="{{ asset('images/ui_images/slideshow4.jpg') }}"/></a></li>
        </ul>
    </div>
    <div class="mission_content">
        <h1 class="mission_title">Il miglior catalogo di articoli di elettronica</h1>
        <h4 class="mission">Tra le marche leader di mercato, Oasis seleziona i prodotti migliori. Oasis ti garantisce l'offerta di prodotti di ultima generazione, le tecnologie più avanzate. 
            Nel catalogo di vendita Oasis l'Innovazione è protagonista e soddisfa ogni esigenza di prezzo. Con Oasis sei sempre al passo con i tempi. In tempi brevi e secondo le tue esigenze, 
            Oasis ti garantisce la consegna a domicilio della merce presente in magazzino. Il tutto accompagnato da un' eccellente assistenza clienti, lo staff di Oasis si occuperà di risolvere
            qualunque problema tu abbia durante la registrazione o la procedura di acquisto, il tutto nel minor tempo possibile. Inoltre Oasis offre moltissimi sconti per ognuno dei nostri 
            clienti, quindi non aspettare a registrarti!
        </h4>

    </div>
</div>

@endsection

@section('secondaryscripts')

<script type="text/javascript" src="{{ asset('js/vmc.slide.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/vmc.slide.effects.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/slideshow.js') }}" ></script>
@endsection
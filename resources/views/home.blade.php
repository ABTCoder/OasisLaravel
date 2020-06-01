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
        <h4 class="mission">Questo sito offre un catalogo, con una vasta gamma di prodotti elettronici. <br>
            Lo scopo di questo sito è quello di offrire agli utenti una visualizzazione rapida e ben organizzata <br>
            dei prodotti in magazzino, 
            con la possibilità di cercare un determinato prodotto che si desidera acquistare.</h4>
			
		</div>
</div>

@endsection

@section('secondaryscripts')
	
	<script type="text/javascript" src="{{ asset('js/vmc.slide.js') }}" ></script>
	<script type="text/javascript" src="{{ asset('js/vmc.slide.effects.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/slideshow.js') }}" ></script>
@endsection
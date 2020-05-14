@extends('layouts.public')

@section('title', 'Home')

@section('content')
<div class="home_box">
<img id="coverpic" src="{{ asset('images/ui_images/oasis_home.jpg') }}">
<div class="mission_content">
			<h1 class="mission_title">Il miglior catalogo di articoli di elettronica</h1>
			<h4 class="mission">Il nostro catalogo offre un catalogo, con una vasta gamma di prodotti elettronici. Lo scopo di questo sito è quello di offrire agli utenti di visionare i prodotti che noi vendiamo. (Da Modificare)</h4>
			</div>
</div>
@endsection
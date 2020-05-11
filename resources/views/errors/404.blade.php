@extends('layouts.public')
@section('title', 'Pagina non trovata')
@section('content')

<img id="not_found" src="{{ asset('images/ui_images/oasis_home_background.jpg') }}">
<div class="centered">
    <div id="boh">
    <div id="big">
        404 |
    </div>
    <div id="small">
    La pagina che stai cercando non esiste 
    <br>
    Torna alla <a href="{{route('home')}}"> Home</a> 
    </div>
</div>
</div>
@endsection
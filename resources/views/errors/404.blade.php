@extends('layouts.errorlayout')

@section('title', 'Pagina non trovata')

@section('content')
<img id="not_found" src="{{ asset('images/ui_images/oasis_home_background.jpg') }}">
<div class="centered">
    
    <div id="big">
        404 |
    </div>
    <div id="small">
    La pagina che stai cercando non esiste 
    <br>
    <span>Torna alla <a href="{{route('home')}}"> Home</a> </span>
    </div>

</div>
@endsection
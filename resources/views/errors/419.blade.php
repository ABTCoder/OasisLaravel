@extends('layouts.errorlayout')

@section('title', 'Accesso negato')

@section('content')
<img id="not_found" src="{{ asset('images/ui_images/oasis_home_background.jpg') }}">
<div class="centered">
    
    <div id="big">
        419 |
    </div>
    <div id="small">
    La connessione al sito è scaduta, per favore riaccedi o
    <br>
    <span>Torna alla <a href="{{route('home')}}"> Home</a> </span>
    </div>

</div>
@endsection
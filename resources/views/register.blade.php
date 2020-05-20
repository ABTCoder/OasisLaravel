@extends('layouts.public')

@section('title', 'Registrati')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="account_box">
    <h2> Registrati </h2>
    <form>
        <input type="text" placeholder="Nome">
        <br>
        <input type="text" placeholder="Cognome">
        <br>
        <input type="text" placeholder="Username">
        <br>
        <input type="text" placeholder="Email">
        <br>
        <input type="password" placeholder="Password">
        <br>
        <input type="text" placeholder="Indirizzo di residenza">
        <br>
        <div class="date_job">
        <input  type="date" placeholder="Data di nascita">
        <select id="select">
            <option class="select_placeholder" value="" disabled selected hidden>Occupazione</option>
            <option value="0">Studente</option>
            <option value="1">Operaio</option>
            <option value="2">Libero professionista</option>
            <option value="3">Disoccupato</option>
        </select>
        </div>
        <br>
        <input type="submit" value="Registrati">
        <br> 
    </form>
    <b> Possiedi già un account? <a href="{{ route('login') }}"> ACCEDI </a> </b>
    <div id="error_msg"> Password errata! </div>
</div>
@endsection
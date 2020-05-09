@extends('layouts.public')

@section('title', 'Pivacy e Policy')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about_policy.css') }}" >
@endsection

@section('content')
<div class="about-policy">
    <h1>Privacy Policy di Oasis</h1>
    <p><b>ULTIMO AGGIORNAMENTO:</b> 5 GIUGNO</p>
    <p>Questa Applicazione raccoglie alcuni Dati Personali dei propri Utenti.</p>
    <h2 id="purposes_data">Dati personali raccolti per le seguenti finalità ed utilizzando i seguenti servizi:</h2>
    <h3 align="center">Registrazione diretta</h3>
    <p>Dati Personali: email, password, data di nascita, occupazione, residenza</p>   
    <h2 id="further_data" align="center">Ulteriori informazioni sui Dati Personali</h2>
    <h3>Ulteriori diritti degli Utenti</h3>
    <p class="more_one">
        Mai e per nessuna ragione vendiamo o affittiamo i Dati degli Utenti a terze parti.
        I soli usi dei Dati sono quelli evidenziati in questa policy.<br> Gli Utenti sono gli unici proprietari dei loro Dati e possono
        richiederne la modifica o la cancellazione in ogni momento.
    </p>
    <h2 id="contact_information">Informazioni di contatto</h2>
    <div class="iconed icon_owner">
        <h3>Titolare del Trattamento dei Dati</h3>
        <p>Oasis s.r.l.
            <br>Via Brecce Bianche, 12, 60131 Ancona AN
            <br>amministratori: Matteo Toma, Giovanni Gregorini, Amal Benson Thaliath,Federico Joseph Panackal</p>
            <p><b>Indirizzo email del titolare:</b> oasis@gmail.com</p>
    </div>
</div>
@endsection
@extends('layouts.public')

@section('title', 'Pivacy e Policy')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about_policy.css') }}" >
@endsection

@section('content')
<div class="about-policy">
    <h1 id="ap_title"> Privacy Policy di Oasis </h1>
    <p class="scopes_title"><b >ULTIMO AGGIORNAMENTO:</b> 02 GIUGNO</p>
    <p>Questa Applicazione raccoglie alcuni Dati Personali dei propri Utenti.</p>
    <h2 id="ap_title">Trattamento dei dati</h2>
    <p>1. Il titolare del trattamento è la persona fisica o giuridica, l'autorità pubblica, il servizio o altro organismo che, singolarmente o insieme ad altri, determina le finalità e i mezzi del trattamento di dati personali. Si occupa anche dei profili sulla sicurezza.</p>   
    <p>2. Il responsabile del trattamento è la persona fisica o giuridica, l'autorità pubblica, il servizio o altro organismo che tratta dati personali per conto del titolare del trattamento. </p>
    <p>3. In caso di necessità, i dati connessi al servizio newsletter possono essere trattati dal responsabile del trattamento o soggetti da esso incaricati a tal fine presso la relativa sede.. </p>
    <h2 id="ap_title" align="center">Ulteriori informazioni sui Dati Personali</h2>
    <h3>Utilizzo di Cookie</h3>
    <p class="more_one">
     Il sito utilizza cookies per rendere l'esperienza di navigazione dell'utente più facile ed intuitiva: i cookies sono piccole stringhe di testo utilizzate per memorizzare alcune informazioni che possono riguardare l'utente, le sue preferenze o il dispositivo di accesso a Internet (computer, tablet o cellulare) e vengono utilizzate principalmente per adeguare il funzionamento del sito alle aspettative dell'utente, offrendo un'esperienza di navigazione più personalizzata e memorizzando le scelte effettuate in precedenza.
    </p>
    <h2 id="ap_title">Informazioni di contatto</h2>
    <div class="iconed icon_owner" >
        <h3 class="scopes_title">Titolare del Trattamento dei Dati</h3>
        <p>Oasis s.r.l.
            <br>Via Brecce Bianche, 12, 60131 Ancona AN
            <br>amministratori: Matteo Toma, Giovanni Gregorini, Amal Benson Thaliath,Federico Joseph Panackal</p>
        <p><b>Indirizzo email del titolare:</b> oasis@gmail.com</p>
    </div>
</div>
@endsection
@extends('layouts.public')

@section('title', 'Privacy e Policy')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about_policy.css') }}" >
@endsection

@section('content')
<div class="about-policy">
    <h1 id="ap_title"> Privacy Policy di Oasis </h1>
    <hr id="ap_divider">
    <h1 class="scopes_title_blue">ULTIMO AGGIORNAMENTO: 3 Giugno 2020</h1>
    <p>Questo sito raccoglie alcuni dati personali dei propri utenti.</p>
    <h1 class="scopes_title_blue">Trattamento dei dati</h1>
    <p>1. Il titolare del trattamento è la persona fisica o giuridica, l'autorità pubblica, il servizio o altro organismo che, singolarmente o insieme ad altri, determina le finalità e i mezzi del trattamento di dati personali. Si occupa anche dei profili sulla sicurezza.</p>   
    <p>2. Il responsabile del trattamento è la persona fisica o giuridica, l'autorità pubblica, il servizio o altro organismo che tratta dati personali per conto del titolare del trattamento. </p>
    <p>3. In caso di necessità, i dati connessi al servizio newsletter possono essere trattati dal responsabile del trattamento o soggetti da esso incaricati a tal fine presso la relativa sede.. </p>
    <p>4. I dati trattati comprendono: Nome, Cognome, E-Mail, Indirizzo di residenza, Occupazione e Data di nascita. Nessuno di questi dati viene condiviso ad entità di terze parti.</p>
    <h1 class="scopes_title_blue">Ulteriori informazioni sui Dati Personali</h1>
    <h1 class="scopes_title">Utilizzo di Cookie</h1>
    <p class="more_one">
        Il sito utilizza cookies per rendere l'esperienza di navigazione dell'utente più facile ed intuitiva: i cookies sono piccole stringhe di testo utilizzate per memorizzare alcune informazioni che possono riguardare l'utente, le sue preferenze o il dispositivo di accesso a Internet (computer, tablet o cellulare) e vengono utilizzate principalmente per adeguare il funzionamento del sito alle aspettative dell'utente, offrendo un'esperienza di navigazione più personalizzata e memorizzando le scelte effettuate in precedenza.
    </p>
    <h1 class="scopes_title_blue">Informazioni di contatto</h1>
    <div class="iconed icon_owner" >
        <h1 class="scopes_title">Titolare del Trattamento dei Dati</h1>
        <p>Oasis s.r.l.
            <br>Via Brecce Bianche, 12, 60131 Ancona AN
            <br><b class="scopes_title">Amministratori:</b> Matteo Toma, Giovanni Gregorini, Amal Benson Thaliath, Federico Joseph Panackal
            <br>Per qualsiasi informazione contattare personalmente il titolare o gli amministratori.</p>
        <p><b class="scopes_title">Indirizzo email del titolare:</b> oasis@gmail.com</p>
    </div>
</div>
@endsection
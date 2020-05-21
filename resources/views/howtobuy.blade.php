@extends('layouts.public')

@section('title', 'Come acquistare')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/howtobuy.css') }}" >
@endsection

@section('content')
<div class="howtobuy">
    <div>
        <h1> Come acquistare? </h1>
        <hr>
        <br>
        <p> Se desideri acquistare uno o più prodotti del nostro catalogo non devi far altro che seguire le seguenti istruzioni:
        <br>
        <br>
        1) registrati compilando il modulo accessibile tramite l'apposita sezione del nostro sito, in questo modo potrai fornirci
        alcuni dei tuoi dati personali per rendere possibile l'eventuale spedizione dei prodotti (se possiedi già un account puoi ignorare questo passaggio)
        <br>
        <br>
        2) inviaci una e-mail a <a href="mailto:oasis@gmail.com"> oasis@gmail.com </a> specificando il codice prodotto dell' articolo che desideri acquistare
        (se i prodotti sono molteplici indicare tutti i codici)
        <br>
        <br>
        Perfetto! Ora non ti resta che attendere che venga effettuata la spedizione, il pagamento sarà effettuato tramite contrassegno.
        <br>
        <br>
        Per eventuali problemi non esitare a contattare lo staff di oasis.
        <br>
        <br>
        </p>
    </div>
</div>
@endsection
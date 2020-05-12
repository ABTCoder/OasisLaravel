@extends('layouts.public')

@section('title', 'Chi siamo')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about_policy.css') }}" >
@endsection

@section('content')
<div class="about-policy" >
    <h1>Siamo un'azienda specializzata nella vendita di categorie di prodotti quali: </h1> 
    <ul>
        <li>   Foto e video : Fotocamere, videocamere, action cam, treppiedi   </li>  
        <li>   Dispositivi mobile: Tablet e telefoni </li>
        <li>   Computer: Laptop, e desktop </li>
        <li>   Display: Tv e monitor </li>
    </ul>
    <br>
    <br>
    <h2>Le nostre email:</h2>
    <a href="mailto:s1082053@studenti.univpm.it ">Matteo Toma</a> <br>
    <a href="mailto:s1081742@studenti.univpm.it ">Amal Benson Thaliath</a> <br>
    <a href="mailto:s1083626@studenti.univpm.it ">Federico Joseph Panackal</a> <br>
    <a href="mailto:s1081677@studenti.univpm.it">Giovanni Gregorini</a> <br>
    <h2>Ecco dove ci troviamo</h2>                                        
    <iframe allowfullscreen="" frameborder="0" height="450" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.9313605000134!2d13.515371994064613!3d43.58714602365773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x161719e4f3f5daaf!2sUniversit%C3%A0+Politecnica+delle+Marche+-+Facolt%C3%A0+di+Ingegneria!5e0!3m2!1sit!2sit!4v1519498340438" style="border:0" width="600"></iframe></p>  
</div>
@endsection
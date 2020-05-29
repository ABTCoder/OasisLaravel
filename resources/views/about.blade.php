@extends('layouts.public')

@section('title', 'Chi siamo')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about_policy.css') }}" >
@endsection

@section('content')
<div class="about-policy" >
	    <h1 id="ap_title"> Chi siamo? </h1>
        <hr id="ap_divider">
    <div class="about_left">
    <div class="about_scopes">
		<h1 class="scopes_title">La nostra azienda si occupa della vendita di:</h1> 
        <li>Fotocamere e videocamere</li>
		<li>Accessori foto e video</li> 
        <li>Smartphone e tablet</li>
        <li>Computer</li>
        <li>Tv e Monitor</li>
    </div>
	<div class="about_emails">
    <h1 class="scopes_title">Le nostre email:</h1>
    <a href="mailto:s1082053@studenti.univpm.it ">Matteo Toma</a> <br>
    <a href="mailto:s1081742@studenti.univpm.it ">Amal Benson Thaliath</a> <br>
    <a href="mailto:s1083626@studenti.univpm.it ">Federico Joseph Panackal</a> <br>
    <a href="mailto:s1081677@studenti.univpm.it">Giovanni Gregorini</a>
	</div>
	</div>
   <div class="about_right">
    <h1 class="scopes_title">Ecco dove ci troviamo:</h1>                                        
    <iframe allowfullscreen="" frameborder="0"  width="900" height="370"scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.9313605000134!2d13.515371994064613!3d43.58714602365773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x161719e4f3f5daaf!2sUniversit%C3%A0+Politecnica+delle+Marche+-+Facolt%C3%A0+di+Ingegneria!5e0!3m2!1sit!2sit!4v1519498340438" style="border:0" ></iframe></p> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
@endsection
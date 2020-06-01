<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Oasis | @yield('title', 'home')</title>
		<link rel="icon" href="{{ asset('images/ui_images/favicon.ico') }}"/>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
		<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>
		<script type="text/javascript" src="{{ asset('js/main.js') }}" ></script>
		@yield('asset')
    </head>
    <body>
        <header>
			@include('layouts/navbar')
        </header>
		<div id="main">
			@yield('content')	
		</div>
        <footer class="main_footer">
            <a href="{{ route('about') }}"> Chi siamo </a>
            <br>
            <a href="{{ route('privacypolicy') }}"> Privacy Policy </a>
            <div class="linksocial">
                <img src="{{ asset('images/ui_images/social-icons.png') }}" usemap="#social-icons-map">
                <map name="social-icons-map">
                    <area target="_blank" alt="instagram" title="instagram" href="https://www.instagram.com/" coords="134,157,154,146,162,132,164,68,158,48,136,31,68,31,48,41,36,63,36,127,46,145,64,157" shape="poly">
                    <area target="_blank" alt="facebook" title="facebook" href="https://www.facebook.com/" coords="250,158,354,158,364,145,364,43,354,30,248,30,236,41,236,148" shape="poly">
                    <area target="_blank" alt="twitter" title="twitter" href="https://twitter.com/" coords="436,135,452,141,466,145,478,145,490,145,502,143,512,137,522,133,530,127,536,117,542,111,546,101,548,89,550,79,550,67,564,55,554,55,560,43,544,47,538,45,532,41,526,41,518,41,510,45,506,48,500,52,498,62,500,73,492,73,482,71,474,69,464,65,458,59,452,53,446,47,444,51,442,58,442,66,446,75,452,81,440,77,442,85,446,93,454,103,448,103,452,111,460,117,468,123,466,129,452,131" shape="poly">
                </map>
            </div>
            <div class="copyright"> © 2020  Oasis </div>
            <div class="hide">Tutti i diritti sono riservati. Qualsiasi riproduzione, anche parziale, senza autorizzazione scritta è vietata.</div>
        </footer>
    </body>
</html>

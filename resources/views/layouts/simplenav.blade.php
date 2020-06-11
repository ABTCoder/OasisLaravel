<nav id="topnav">
    <a class="homelink" href="{{ route('home') }}">
        <img class="sitelogo" src="{{ asset('images/ui_images/logo.png') }}">
        <span> OASIS </span>
    </a>
    <ul>
        <li class="{{ Route::is('home*') ? 'active' : '' }}"><a href="{{ route('home') }}"> 
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_home.png') }}">HOME</a></li>
        <li class="{{ Request::is('products*') ? 'active' : '' }}"><a href="{{ route('products') }}">
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_products.png') }}">PRODOTTI</a></li>
        <li class="{{ Route::is('howtobuy*') ? 'active' : '' }}"><a href="{{ route('howtobuy') }}">
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_buyinfo.png') }}">COME ACQUISTARE</a></li>
        <li class="{{ Route::is('relation*') ? 'active' : '' }}"><a href="http://tweb2.dii.univpm.it/~grp_07/laraProject/public/Relazione.pdf" target="_blank">
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_relation.png') }}">RELAZIONE</a></li>
    </ul>
</nav>
<!--NAVBAR SEMPLIFICATA PER LE PAGINE DI ERRORE -->
<nav id="topnav">
    <a class="homelink" href="{{ route('home') }}">
        <img src="{{ asset('images/ui_images/logo.png') }}">
        <span> OASIS </span>
    </a>
    <ul>
        <li class="{{ Route::is('home*') ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
        <li class="{{ Route::is('products*') ? 'active' : '' }}"><a href="{{ route('products') }}">PRODOTTI</a></li>
        <li><a href="howtobuy.html">COME ACQUISTARE</a></li>
        <li class="{{ Route::is(['login*', 'signup*']) ? 'active' : '' }}" id="account">
            <div class="dropdown">
                <a id="profile">
                    ACCOUNT 
                    <img src="{{ asset('images/ui_images/profile.png') }}">
                </a>
                <div class="dropdown-content">
                    <a href="{{ route('login') }}">ACCEDI</a>
                    <a href="{{ route('signup') }}">REGISTRATI</a>
                </div>
            </div>
        </li>
        <li id="staff"><a href="staffdashboard.html"> AREA STAFF</a></li>
        <li id="admin"><a href="admindashboard.html"> AREA ADMIN</a></li>
    </ul>
</nav>
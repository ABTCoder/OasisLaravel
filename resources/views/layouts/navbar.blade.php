<nav id="topnav">
    <a class="homelink" href="home.html">
        <img src="{{ asset('images/ui_images/logo.png') }}">
        <span> OASIS </span>
    </a>
    <ul>
        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="home.html">HOME</a></li>
        <li><a href="products.html">PRODOTTI</a></li>
        <li><a href="howtobuy.html">COME ACQUISTARE</a></li>
        <li id="account">
            <div class="dropdown">
                <a id="profile">
                    ACCOUNT 
                    <img src="{{ asset('images/ui_images/profile.png') }}">
                </a>
                <div class="dropdown-content">
                    <a href="login.html">ACCEDI</a>
                    <a href="signup.html">REGISTRATI</a>
                </div>
            </div>
        </li>
        <li id="staff"><a href="staffdashboard.html"> AREA STAFF</a></li>
        <li id="admin"><a href="admindashboard.html"> AREA ADMIN</a></li>
    </ul>
</nav>
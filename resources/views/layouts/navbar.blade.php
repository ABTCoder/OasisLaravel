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
        <li class="{{ Route::is('relation*') ? 'active' : '' }}"><a href="https://www.google.it/">
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_relation.png') }}">RELAZIONE</a></li>


        <li class="{{ Route::is(['login*', 'signup*']) ? 'active' : '' }}" id="account">
            <div class="dropdown">
                <a id="profile">
                    <img src="{{ asset('images/ui_images/profile.png') }}">
                    ACCOUNT
                </a>
                <div class="dropdown-content">
                    @guest
                    <a href="{{ route('login') }}">ACCEDI</a>
                    <a href="{{ route('register') }}">REGISTRATI</a>
                    @endguest
                    @can('isUser')
                    <a href="{{ route('editaccount') }}">MODIFICA</a>
                    @endcan
                    @auth
                    <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ESCI</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endauth
                </div>
            </div>
        </li>
        @can('isStaff')
        <li class="{{ Request::is('staff*') ? 'active' : '' }}" id="staff"><a href="{{ route('staff') }}"> 
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_staff.png') }}">AREA STAFF</a>
        </li>
        @endcan
        @can('isAdmin')
        <li class="{{ Request::is('admin*') ? 'active' : '' }}" id="admin"><a href="{{ route('admin') }}"> 
                <img class="nav_item_icon"src="{{ asset('images/ui_images//navicons/nav_admin.png') }}">AREA ADMIN</a></li>
        @endcan
    </ul>
</nav>
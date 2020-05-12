@extends('layouts.public')

@section('title', 'Area Admin')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/admindashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="admin_main" id="main">
            <div class="admin_sidenav">
                <div class="adminnav_items">
                    <a href="#addcat"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi staff</a><br>  
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina staff</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina utente</a><br>
                </div>
            </div>
            <div class="side_container">
                <div class="sc_content">
					<h1 id="sc_title">Aggiungi staff</h1>
                    <div class="account_box" id="admin_dash_box">
                <form>
                    <input type="text" placeholder="Nome">
                    <br>
                    <input type="text" placeholder="Cognome">
                    <br>
                    <input type="text" placeholder="Username">
                    <br>
                    <input type="text" placeholder="Email">
                    <br>
                    <input type="password" placeholder="Password">
                    <br>
                    <input type="submit" value="Inserisci">
                    <br> 
                </form>
            </div>
                </div>
            </div>
        </div>
@endsection
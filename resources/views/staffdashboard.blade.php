@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
@endsection

@section('content')
<div class="staff_main" id="main">
            <div class="staff_sidenav">
                <div class="staffnav_items">
                    <a href="#addcat"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi categoria</a><br>
                    <a href="#addsub"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi sottoategoria</a><br>   
                    <a href="#addprod"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi prodotto</a><br>   
                    <a href="#editcat"><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica categoria</a><br>   
                    <a><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica sottocategoria</a><br>   
                    <a><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica prodotto</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina categoria</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina sottocategoria</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina prodotto</a><br>
                </div>
            </div>
            <div class="side_container">
                <div class="sc_content">
                    <form action="staffdashboard.html" method="post">
                        <h1 id="sc_title">Aggiungi prodotto</h1><br>
                        <div class="out_prodname"><h3 class="sc_hint">Nome Prodotto</h3>
                            <input class="sc_textinput" type="text" id="prodname" ></div>

                        <div class="alpha">
                            <img id="sc_addpic" src="https://i.imgur.com/hiKw7xS.png">

                            <div class="bravo">
                                <div class="bravo_desc">
                                    <h3 class="sc_hint">Descrizione breve</h3>
                                    <input class="sc_textinput" type="text" id="shortdesc">
                                </div>
                                <div class="bravo_triple">
                                    <div class="bravo_price">
                                        <h3 class="sc_hint">Prezzo</h3>
                                        <input class="sc_textinput" type="text" id="price"></div>
                                    <div class="bravo_discount">
                                        <h3 class="sc_hint">Sconto membri</h3>
                                        <input class="sc_textinput" type="text" id="discount"></div>
                                    <div class="bravo_brand">
                                        <h3 class="sc_hint">Marca</h3>
                                        <input class="sc_textinput" type="text" id="brand"></div>

                                </div>
                            </div>
                        </div>
                        <div class="delta">
                            <h3 class="sc_hint">Descrizione esaustiva</h3>
                            <input class="sc_textinput" type="text" id="longdesc"></div>
                    </form>

                </div>
            </div>
		</div>
@endsection
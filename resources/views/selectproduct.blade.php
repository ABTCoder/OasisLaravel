@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >
@endsection

@section('content')
<div class="staff_main">
            <div class="staff_sidenav">
                <div class="staffnav_items">
                    <a href="#addcat"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi categoria</a><br>
                    <a href="#addsub"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi sottoategoria</a><br>   
                    <a href="#addprod"><img src="{{ asset('images/ui_images/add_white.png') }}">Aggiungi prodotto</a><br>   
                    <a href="#editcat"><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica categoria</a><br>   
                    <a><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica sottocategoria</a><br>   
                    <a href="{{ route('selectproduct') }}"><img src="{{ asset('images/ui_images/edit_white.png') }}">Modifica prodotto</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina categoria</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina sottocategoria</a><br>
                    <a><img src="{{ asset('images/ui_images/delete_white.png') }}">Elimina prodotto</a><br>
                </div>
            </div>
            <div class="searchandbox">
                <form class="search_bar">
                    <input type="text" placeholder="Ricerca">
                    <input type="submit" value="Cerca">
                </form>
                <div class="list_box">
                    <h1 id="title"> Seleziona il prodotto </h1>
                    <div class="productrow">
                        <img id="p_img" src="{{ asset('images/ui_images/rick.gif') }}">
                        <div id="info">
                            <h1 id="name"> Rick </h1>
                            <h3 id="code"> N3V3R60NN46IV3Y0UUP </h3>
                            <h3 id="description"> Just Rick, the best singer ever. </h3>
                        </div>
                        <h3 id="price"> $999,99 </h3>
                    </div>
                    <hr>
                    <div class="productrow">
                        <img id="p_img" src="{{ asset('images/ui_images/rick.gif') }}">
                        <div id="info">
                            <h1 id="name"> Rick </h1>
                            <h3 id="code"> N3V3R60NN46IV3Y0UUP </h3>
                            <h3 id="description"> Just Rick, the best singer eveeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeer. </h3>
                        </div>
                        <h3 id="price"> $99999,99 </h3>
                    </div>
                    <hr>
                    <div class="productrow">
                        <img id="p_img" src="{{ asset('images/ui_images/rick.gif') }}">
                        <div id="info">
                            <h1 id="name"> Rick </h1>
                            <h3 id="code"> N3V3R60NN46IV3Y0UUP </h3>
                            <h3 id="description"> Just Rick, the best singer ever. </h3>
                        </div>
                        <h3 id="price"> $999,99 </h3>
                    </div>
                    <hr>
                    <div class="productrow">
                        <img id="p_img" src="{{ asset('images/ui_images/rick.gif') }}">
                        <div id="info">
                            <h1 id="name"> Rick </h1>
                            <h3 id="code"> N3V3R60NN46IV3Y0UUP </h3>
                            <h3 id="description"> Just Rick, the best singer ever. </h3>
                        </div>
                        <h3 id="price"> $999,99 </h3>
                    </div>
                    <hr>
                    <div class="productrow">
                        <img id="p_img" src="{{ asset('images/ui_images/rick.gif') }}">
                        <div id="info">
                            <h1 id="name"> Rick </h1>
                            <h3 id="code"> N3V3R60NN46IV3Y0UUP </h3>
                            <h3 id="description"> Just Rick, the best singer ever. </h3>
                        </div>
                        <h3 id="price"> $999,99 </h3>
                    </div>
                </div>
            </div>
        </div>
@endsection
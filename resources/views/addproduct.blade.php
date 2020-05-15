@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="side_container">

        <form action="staffdashboard.html" method="post">
            <h1 id="sc_title">Aggiungi prodotto</h1><br>
            <div class="out_prodname"><h3 class="sc_hint">Nome Prodotto</h3>
                <input class="sc_textinput" type="text" id="prodname" ></div>


            <img id="sc_addpic" src="https://i.imgur.com/hiKw7xS.png">


            <h3 class="sc_hint">Descrizione breve</h3>
            <input class="sc_textinput" type="text" id="shortdesc">

            <h3 class="sc_hint">Prezzo</h3>
            <input class="sc_textinput" type="text" id="price"><br>


            <h3 class="sc_hint">Sconto membri</h3>
            <input class="sc_textinput" type="text" id="discount"><br>

            <h3 class="sc_hint">Marca</h3>
            <input class="sc_textinput" type="text" id="brand"><br>

            <select id="select_cat">
                <option class="selcat_placeholder" value="" disabled selected hidden>Sottocategoria</option>
                <option value="0">1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
            </select>
            <h3 class="sc_hint">Descrizione esaustiva</h3>
            <input class="sc_textinput" type="text" id="longdesc">
        </form>

    </div>
</div>
@endsection
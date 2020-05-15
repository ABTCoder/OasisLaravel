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

        <form enctype="multipart/form-data" method="post" action="{{ route('addproduct.store')  }}">
            <h1 id="sc_title">Aggiungi prodotto</h1><br>

            @csrf    
            <div class="out_prodname">
                <h3 class="sc_hint">Nome Prodotto</h3>
                <input class="sc_textinput" type="text" id="nome" value="{{ old('nome') }}">
                <p style="color:red"> @if ($errors->first('nome'))
                    @foreach ($errors->get('nome') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif</p>
            </div>
            <div class="alpha">
                <div>
                    <label class="label-input" for="image"id="sc_addpic">Scegli un' immagine</label>
                    <input class="input" type="file" name="image" id="image">
                    <p style="color:red">    @if ($errors->first('image'))
                    <ul class="errors">
                        @foreach ($errors->get('image') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif </p>
                </div>

                <div class="bravo">
                    <h3 class="sc_hint">Descrizione breve</h3>
                    <input class="sc_textinput" type="text" id="desc_breve"  value="{{ old('descr_breve') }}">
                    <p style="color:red">   @if ($errors->first('desc_breve'))
                        @foreach ($errors->get('desc_breve') as $message)
                        {{ $message }}
                        @endforeach
                        @endif </p>

                    <h3 class="sc_hint">Prezzo</h3>
                    <input class="sc_textinput" type="text" id="prezzo"  value="{{ old('prezzo') }}">
                    <p style="color:red">  @if ($errors->first('prezzo'))
                        @foreach ($errors->get('prezzo') as $message)
                        {{ $message }}
                        @endforeach
                        @endif </p>

                    <h3 class="sc_hint">Sconto membri (%) </h3>
                    <input class="sc_textinput" type="text" id="sconto"  value="{{ old('sconto') }}">
                    <p style="color:red">  @if ($errors->first('sconto'))
                        @foreach ($errors->get('sconto') as $message)
                        {{ $message }}
                        @endforeach
                        @endif </p>
                </div>
            </div>

            <div class="charlie">
                <div class="charlie_inner">
                    <h3 class="sc_hint">Marca</h3>
                    <input class="sc_textinput" type="text" id="marca" value="{{ old('marca') }}">
                    <p style="color:red">  @if ($errors->first('marca'))
                        @foreach ($errors->get('marca') as $message)
                        {{ $message }}
                        @endforeach
                        @endif </p>
                </div>

                <div class="charlie_inner"><h3 class="sc_hint">Sottocategoria</h3>
                    <select name="sottocategoria" class="select_cat">
                        <p style="color:red">       @foreach($subCategories as $cat)
                        <option value="{{ $cat->id }}" {{ old('sottocategoria') == $cat->id ? 'selected' : '' }}>{{ $cat->nome }}</option>
                        @endforeach </p>
                    </select>
                </div>
            </div>
            <div>
                <h3 class="sc_hint">Descrizione esaustiva</h3>
                <input class="sc_textinput" type="text" id="desc_esaustiva" value="{{ old('desc_esaustiva') }}">
                <p style="color:red"> @if ($errors->first('desc_esaustiva'))
                    @foreach ($errors->get('desc_esaustiva') as $message)
                    {{ $message }}
                    @endforeach
                    @endif </p> 

            </div>
            <div class="button_container">
                <input type="submit" value="Pubblica" class="publish"></div>
        </form>

    </div>
</div>
@endsection
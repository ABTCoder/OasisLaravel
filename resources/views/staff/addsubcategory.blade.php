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
        @isset($subcategory)
        {{ Form::model($subcategory, array('route' => array('editsubcategory.save', $subcategory->id))) }}
        @method('PUT')
        <h1 id="sc_title">Modifica sottocategoria</h1><br>
        <!-- FINE AGGIORNA CATEGORIA -->
        @else
        {{ Form::open(array('route' => 'addsubcategory.store', 'id' => 'addsubcategory')) }}
        <h1 id="sc_title">Aggiungi sottocategoria</h1><br>
        @endisset
        @csrf    
        <div class="out_prodname">
            <h3 class="sc_hint" id="prodname_hint">Nome sottocategoria</h3>
            {{ Form::text('nome', null, ['class' => 'sc_textinput', 'id' => 'nome']) }}
            <div class="errormsg"> 
                @if ($errors->first('nome'))
                @foreach ($errors->get('nome') as $message)
                {{ $message }}
                @endforeach 
                @endif
            </div>
        </div>
        <div class="charlie_inner" id="charlie_subcat"><h3 class="sc_hint">Categoria di appartenenza</h3>
            {{ Form::select('categoria', $categories, null, ['class' => 'select_cat','id' => 'categoria']) }}
        </div>
        <div class="button_container">
            @isset($subcategory)
            {{ Form::submit('Salva', ['class' => 'publish']) }}
            @else
            {{ Form::submit('Aggiungi', ['class' => 'publish']) }}
            @endisset

            {{ Form::close() }}
        </div>
    </div>
    @endsection
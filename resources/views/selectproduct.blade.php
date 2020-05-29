@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >

<script>
    var url = "{{ Route::currentRouteName() }}";
    if(url == 'editproduct2')
        url = '/~grp_07/laraProject/public/staff/editproduct';
    if(url == 'deleteproduct2')
        url = '/~grp_07/laraProject/public/staff/deleteproduct';
    
    var msgUrl = "completemsg/2";
    
</script>

@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="searchandbox">
        @if(Route::is('editproduct'||'editproduct2'))
        {{ Form::open(array('route' => 'editproduct2', 'class' => 'search_bar', 'method' => 'GET')) }}
            {{ Form::text('term', null, ['placeholder' => 'Ricerca']) }}
            {{ Form::submit('Cerca') }}
	{{ Form::close() }}
        @else
        {{ Form::open(array('route' => 'deleteproduct2', 'class' => 'search_bar', 'method' => 'GET')) }}
            {{ Form::text('term', null, ['placeholder' => 'Ricerca']) }}
            {{ Form::submit('Cerca') }}
	{{ Form::close() }}
        @endif
        <div class="list_box">
            <h1 id="title"> Seleziona il prodotto </h1>
            @isset($products)
            <hr>
            @foreach ($products as $product)
			<!-- <a style="text-decoration:none" href="{{ Route('editproduct', [$product->codice]) }}"> -->
            <div id="{{$product->codice}}" class="productrow" >
                <div id="immagine">
                    @include('helpers/imgProducts', ['imgFile' => $product->immagine])
                </div>
                <div id="info">
                    <h1 id="name"> {{ $product->nome }} </h1>
                    <h3 id="code"> Codice prodotto:  {{ $product->codice }} </h3>
                    <h3 id="description"> {{ $product->desc_breve }} </h3>
                </div>
                <div id="price"> @include('helpers/priceProducts') </div>
			</div>
            <!-- </a> -->
            <hr>
            @endforeach
            @endisset
        </div>
		@if(Route::is('editproduct'||'editproduct2'))
		<button class ="publish" id="edit"> Modifica </button>
		@else
		<button class ="publish" id="delete" data-token="{{ csrf_token() }}" > Elimina </button>
		@endif
    </div>
</div>
@endsection
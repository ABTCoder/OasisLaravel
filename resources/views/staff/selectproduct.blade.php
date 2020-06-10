@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >

<script>
    var routeName = "{{ Route::currentRouteName() }}";
    var urledit = "{{ route('editproduct') }}";
    var urldelete = "{{ route('deleteproduct.delete') }}";
    var type = "";
	var searchUrl = "{{ route('deleteproduct2', 'placeholder' ) }}";
    if (routeName == 'editproduct' || routeName == 'editproduct2'){
        type = "edit";
		searchUrl = "{{ route('editproduct2', 'placeholder' ) }}";
	}
    var msgUrl = "{{ route('completemsg', 2 ) }}";

</script>

@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="searchandbox">
        {{ Form::open(array('class' => 'search_bar')) }}
        {{ Form::text('term', null, ['placeholder' => 'Ricerca', 'id' => 'term']) }}
        {{ Form::submit('Cerca', ['id' => 'search']) }}
        {{ Form::close() }}
        @if(Route::is('editproduct') || Route::is('editproduct2'))
        <h1 id="title"> Seleziona il prodotto da modificare</h1>
        @else
        <h1 id="title"> Seleziona uno o più prodotti da eliminare</h1>
        @endif
        <div class="list_box">

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
        @if(Route::is('editproduct') || Route::is('editproduct2'))
        <button class ="publish" id="edit"> Modifica </button>
        @else
        <button class ="publish" id="delete" data-token="{{ csrf_token() }}" > Elimina </button>
        @endif
    </div>
</div>
@endsection
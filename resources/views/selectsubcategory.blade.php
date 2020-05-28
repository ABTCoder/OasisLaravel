@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="searchandbox">
        <div class="list_box">
            <h1 id="title"> Seleziona la sottocategoria </h1>
            @isset($subcategories)
            <hr>
            @foreach ($subcategories as $subcategory)
            <div id="{{$subcategory->id}}" class="productrow" >
                <h1 id="name"> {{ $subcategory->nome }} in {{ $subcategory->categoria }}</h1>
            </div>    
            <hr>
            @endforeach
            @endisset
        </div>
            @if(Route::is('editsubcategory'))
            <button class ="publish" id="editsub"> Modifica </button>
            @else
            <button class ="publish" id="deletesub" data-token="{{ csrf_token() }}" > Elimina </button>
            @endif
    </div>
</div>
@endsection
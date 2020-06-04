@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >
<script>
	var routeName = "{{ Route::currentRouteName() }}";
	var urledit = "{{ route('editsubcategory') }}";
	var urldelete = "{{ route('deletesubcategory.delete') }}";
	var type = "";
	if(routeName == 'editsubcategory') type = "edit";
    var msgUrl = "{{ route('completemsg', 8 ) }}";
</script>
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="searchandbox">
		@if(Route::is('editsubcategory'))
		<h1 id="title"> Seleziona la sottocategoria da modificare</h1>
		@else
		<h1 id="title"> Seleziona una o più sottocategorie da eliminare</h1>
		@endif
        <div class="list_box">
            @isset($subcategories)
            @isset($categories)
            <hr>
            @foreach ($subcategories as $subcategory)
            <div id="{{$subcategory->id}}" class="productrow" >
                <h1 id="name"> {{ $subcategory->nome }} in {{ $categories->where('id', $subcategory->categoria)->first()->nome }}</h1>
            </div>    
            <hr>
            @endforeach
            @endisset
            @endisset
        </div>
            @if(Route::is('editsubcategory'))
            <button class ="publish" id="edit"> Modifica </button>
            @else
            <button class ="publish" id="delete" data-token="{{ csrf_token() }}" > Elimina </button>
            @endif
    </div>
</div>
@endsection
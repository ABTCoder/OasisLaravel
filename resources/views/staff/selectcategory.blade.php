@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >
<script>
    var routeName = "{{ Route::currentRouteName() }}";
    var urledit = "{{ route('editcategory') }}";
    var urldelete = "{{ route('deletecategory.delete') }}";
    var type = "";
    if (routeName == 'editcategory')
        type = "edit";
    var msgUrl = "{{ route('completemsg', 5 ) }}";
</script>
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="searchandbox">
        @if(Route::is('editcategory'))
        <h1 id="title"> Seleziona la categoria da modificare</h1>
        @else
        <h1 id="title"> Seleziona una o più categorie da eliminare</h1>
        @endif
        <div class="list_box">
            @isset($categories)
            <hr>
            @foreach ($categories as $category)
            <div id="{{$category->id}}" class="productrow" >
                <h1 id="name"> {{ $category->nome }} </h1>
            </div>
            <hr>
            @endforeach
            @endisset
        </div>
        @if(Route::is('editcategory'))
        <button class ="publish" id="edit"> Modifica </button>
        @else
        <button class ="publish" id="delete" data-token="{{ csrf_token() }}" > Elimina </button>
        @endif
    </div>
</div>
@endsection
@extends('layouts.public')

@section('title', 'Area Admin')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/admindashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >

<script>
    var url = "{{ Route::currentRouteName() }}";
    var msgUrl = "/~grp_07/laraProject/public/admin/completemsg/2";
    if(url === 'deleteuser') msgUrl = "/~grp_07/laraProject/public/admin/completemsg/3";
</script>

@endsection

@section('content')
<div class="admin_main" id="main">
    @include ('layouts.adminsidenav')
    <div class="side_container" id="adminmainview">
        <div class="sc_content">
            @if(Route::is('deletestaff'))
            <h1 id="sc_title">Elimina staff</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <div id="txt_delstaff">Seleziona un membro dello staff da eliminare</div>
                <br> 
            </div>
            @else
            <h1 id="sc_title">Elimina utente</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <div id="txt_delstaff">Seleziona un utente da eliminare</div>
                <br> 
            </div>
            @endif
            
            <div class="list_box">
            @isset($users)
            <hr>
            @foreach ($users as $user)
            <div id="{{$user->id}}" class="productrow" >
                    <h1 id="name"> {{ $user->username }} </h1>
            </div>
            <hr>
            @endforeach
        </div>
            
            <button class ="publish" id="delete" data-token="{{ csrf_token() }}" > Elimina </button>

            @else <h1 id="complete_msg"> Non ci sono record </h1>
            @endisset
        </div>
    </div>
</div>
@endsection
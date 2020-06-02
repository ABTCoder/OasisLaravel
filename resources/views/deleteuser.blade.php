@extends('layouts.public')

@section('title', 'Area Admin')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/admindashboard.css') }}" >
@endsection

@section('content')
<div class="admin_main" id="main">
    @include ('layouts.adminsidenav')
     <div class="side_container" id="adminmainview">
        <div class="sc_content">
	@isset($users)
            {{ Form::open(array('route' => 'deleteuser', 'id' => 'deleteuser','method'=>'DELETE')) }}
            <h1 id="sc_title">Elimina utente</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <div id="txt_delstaff">Seleziona un utente da eliminare</div>
                {{ Form::select('cliente', $users, null, ['id' => 'userlist','class' => 'userslist']) }}
                {{ Form::submit('Elimina', ['id' => 'deleteuser', 'class' => 'deletebtn']) }}
                @csrf
                <br> 
            </div>
            {{ Form::close() }}
            @else <h1 id="complete_msg"> Non ci sono utenti</h1>
            @endisset
        </div>
    </div>
</div>
@endsection
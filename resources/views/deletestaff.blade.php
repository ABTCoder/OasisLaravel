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
            {{ Form::open(array('route' => 'deletestaff', 'id' => 'deletestaff','method'=>'DELETE')) }}
            <h1 id="sc_title">Elimina staff</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <div id="txt_delstaff">Seleziona un membro dello staff da eliminare</div>
                {{ Form::select('staff', $users, null, ['id' => 'userlist', 'class' => 'userslist']) }}
                {{ Form::submit('Elimina', ['id' => 'deletestaff', 'class' => 'deletebtn']) }}
                @csrf
                <br> 
            </div>
            {{ Form::close() }}
            @else <h1 id="complete_msg"> Non ci sono utenti staff </h1>
            @endisset
        </div>
    </div>
</div>
</div>
@endsection
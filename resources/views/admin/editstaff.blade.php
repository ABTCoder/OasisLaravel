@extends('layouts.public')

@section('title', 'Area Admin')

@section('asset')
<script>
    @isset($staff)
            var actionUrl = "{{route('editstaff.save', $staff->id)}}";
    @endisset
            var formId = 'editstaff';
    var method = 'POST';
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/admindashboard.css') }}" >
@endsection

@section('content')
<div class="admin_main" id="main">
    @include ('layouts.adminsidenav')
    <div class="side_container" id="adminmainview">
        <div class="sc_content">
            @isset($users)
            <h1 id="sc_title">Modifica staff</h1>
            <div id="txt_delstaff">Seleziona il membro dello staff da modificare e premi carica</div>
            {{ Form::select('staff', $users, null, ['id' => 'userlist', 'class' => 'userslist']) }}
            {{ Form::button('Carica', ['id' => 'loadstaff', 'class' => 'deletebtn']) }}
            <br> 
            @isset($staff)
            {{ Form::model($staff, array('route' => array('editstaff.save', $staff->id), 'id'=>'editstaff')) }}
            @csrf
            <div class="addstaff_box" id="admin_dash_box">
                {{ Form::text('nome', null, ['class' => 'input', 'id' => 'nome', 'placeholder' => 'Nome']) }}
                <div id="error_nome" class="errormsg"></div>
                <br>
                {{ Form::text('cognome', null, ['class' => 'input', 'id' => 'cognome', 'placeholder' => 'Cognome']) }}
                <div id="error_cognome" class="errormsg"></div>
                <br>
                {{ Form::text('email', null, ['class' => 'input', 'id' => 'email', 'placeholder' => 'E-Mail']) }}
                <div id="error_email" class="errormsg"></div>
                <br>
                {{ Form::password('password', ['class' => 'input', 'placeholder' => 'Password', 'id' => 'password']) }}
                <div id="error_password" class="errormsg""></div>
                <br>
                {{ Form::password('password_confirmation', ['class' => 'input', 'placeholder' => 'Conferma Password', 'id' => 'password_confirmation']) }}
                <br>
                {{ Form::submit('Modifica', ['class' => 'admin_submit', 'id' => 'adduser']) }}
                {{ Form::close() }}
                @endisset
            </div>
            @else <h1 id="complete_msg"> Non ci sono utenti staff </h1>
            @endisset
        </div>
    </div>
</div>
</div>
@endsection
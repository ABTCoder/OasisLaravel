@extends('layouts.public')

@section('title', 'Area Admin')

@section('asset')
<script>
    var actionUrl = "{{ route('addstaff.store') }}";
    var formId = 'addstaff';
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
            {{ Form::open(array('route' => 'addstaff.store', 'id' => 'addstaff')) }}
            @csrf
            <h1 id="sc_title">Aggiungi staff</h1>
            <div class="addstaff_box" id="admin_dash_box">
                {{ Form::text('nome', null, ['class' => 'input', 'id' => 'nome', 'placeholder' => 'Nome']) }}
                <div class="errormsg" id="error_nome"></div>
                <br>
                {{ Form::text('cognome', null, ['class' => 'input', 'id' => 'cognome', 'placeholder' => 'Cognome']) }}
                <div class="errormsg" id="error_cognome"></div>
                <br>
                {{ Form::text('username', null, ['class' => 'input', 'id' => 'username', 'placeholder' => 'Username']) }}
                <div class="errormsg" id="error_username"></div>
                <br>
                {{ Form::text('email', null, ['class' => 'input', 'id' => 'email', 'placeholder' => 'E-mail']) }}
                <div class="errormsg" id="error_email"></div>
                <br>
                {{ Form::password('password', ['class' => 'input', 'placeholder' => 'Password', 'id' => 'password']) }}
                <div class="errormsg" id="error_password"></div>
                <br>
                {{ Form::password('password_confirmation', ['class' => 'input', 'placeholder' => 'Conferma Password', 'id' => 'password_confirmation']) }}
                <br>
                {{ Form::submit('Inserisci',  ['class' => 'admin_submit','id' => 'adduser']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

</div>
</div>
@endsection
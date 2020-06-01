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
{{ Form::model($users, array('route' => array('editstaff.save', $users->codice), 'files' =>)) }}
            <h1 id="sc_title">Modifica staff</h1>
			                
		
					<div id="txt_delstaff">Seleziona il membro dello staff da modificare e premi carica</div>
				{{ Form::select('staff', $subCategories, null, ['id' => 'userlist']) }}
				{{ Form::submit('Carica', ['id' => 'deletebtn']) }}
                    <br> 

			
            <div class="addstaff_box" id="admin_dash_box">
					{{ Form::text('nome', null, ['class' => 'input', 'id' => 'nome', 'placeholder' => 'Nome']) }}
					<div class="errormsg"> 
					@if ($errors->first('nome'))
                    @foreach ($errors->get('nome') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
				</div>
                    <br>
					{{ Form::text('cognome', null, ['class' => 'input', 'id' => 'nome', 'placeholder' => 'Cognome']) }}
					<div class="errormsg"> 
					@if ($errors->first('cognome'))
                    @foreach ($errors->get('cognome') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
				</div>
                    <br>
					{{ Form::text('email', null, ['class' => 'input', 'id' => 'nome', 'placeholder' => 'E-Mail']) }}
					<div class="errormsg"> 
					@if ($errors->first('email'))
                    @foreach ($errors->get('email') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
				</div>
                    <br>
					{{ Form::password('password', ['class' => 'input', 'placeholder' => 'Password', 'id' => 'password']) }}
					<div class="errormsg"> 
					@if ($errors->first('password'))
                    @foreach ($errors->get('password') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
				</div>
                    <br>
				{{ Form::password('password_confirmation', ['class' => 'input', 'placeholder' => 'Conferma Password', 'id' => 'password-confirm']) }}
				<br>
					{{ Form::submit('Modifica', ['class' => 'admin_submit']) }}
				{{ Form::close() }}
            </div>
        </div>
    </div>
</div>
</div>
@endsection
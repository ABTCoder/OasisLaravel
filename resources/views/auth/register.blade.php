@extends('layouts.public')

@section('title', 'Registrati')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="account_box">
    <h2> Registrati </h2>
	{{ Form::open(array('route' => 'register')) }}
		{{ Form::text('nome', '', ['placeholder' => 'Nome', 'id' => 'nome']) }}
		@if ($errors->first('nome'))
			@foreach ($errors->get('nome') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
		{{ Form::text('cognome', '', ['placeholder' => 'Cognome', 'id' => 'cognome']) }}
		@if ($errors->first('cognome'))
			@foreach ($errors->get('cognome') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
		{{ Form::text('username', '', ['placeholder' => 'Username', 'id' => 'username']) }}
		@if ($errors->first('username'))
			@foreach ($errors->get('username') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
		{{ Form::text('email', '', ['placeholder' => 'Email', 'id' => 'email']) }}
		@if ($errors->first('email'))
			@foreach ($errors->get('email') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
		{{ Form::password('password', ['placeholder' => 'Password', 'id' => 'password']) }}
		@if ($errors->first('password'))
			@foreach ($errors->get('password') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
		<br>
		{{ Form::password('password_confirmation', ['placeholder' => 'Conferma Password', 'id' => 'password-confirm']) }}
        <br>
		{{ Form::text('residenza', null, ['placeholder' => 'Indirizzo di residenza', 'id' => 'residenza']) }}
		@if ($errors->first('residenza'))
			@foreach ($errors->get('residenza') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
        <div class="date_job">
		{{ Form::date('data_nasc', null, ['placeholder' => 'Data di nascita', 'id' => 'data_nasc']) }}
		{{ Form::select('occupazione', ['Studente' => 'Studente', 'Operaio' => 'Operaio', 'Libero professionista' => 'Libero professionista', 
										'Pubblica sicurezza' => 'Pubblica Sicurezza', 'Medico' => 'Medico', 'Impiegato' => 'Impiegato',
										'Insegnante' => 'Insegnante'], null, ['placeholder' => 'Professione','id' => 'occupazione']) }}
        </div>
		@if ($errors->first('data_nasc'))
			@foreach ($errors->get('data_nasc') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
		<br>
		@if ($errors->first('occupazione'))
			@foreach ($errors->get('occupazione') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
		{{ Form::submit('Registrati') }}
        <br>
	{{ Form::close() }}
    <b> Possiedi già un account? <a href="{{ route('login') }}"> ACCEDI </a> </b>
</div>
@endsection
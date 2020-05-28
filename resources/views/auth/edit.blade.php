@extends('layouts.public')

@section('title', 'Modifica')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="account_box">
    <h2> Modifica </h2>
	{{ Form::model($user, array('route' => array('editaccount.save'))) }}
		@csrf
		@method('PATCH')
        {{ Form::text('email', null, ['placeholder' => 'Email', 'id' => 'email']) }}
		@if ($errors->first('email'))
			@foreach ($errors->get('email') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
        {{ Form::password('oldpassword', ['placeholder' => 'Vecchia password', 'id' => 'oldpassword']) }}
		@if ($errors->first('oldpassword'))
			@foreach ($errors->get('oldpassword') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
        {{ Form::password('newpassword', ['placeholder' => 'Nuova password', 'id' => 'newpassword']) }}
		@if ($errors->first('newpassword'))
			@foreach ($errors->get('newpassword') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
		<br>
		{{ Form::password('newpassword_confirmation', ['placeholder' => 'Conferma Password', 'id' => 'password-confirm']) }}
        <br>
		{{ Form::text('nome', null, ['placeholder' => 'Nome', 'id' => 'nome']) }}
		@if ($errors->first('nome'))
			@foreach ($errors->get('nome') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
        <br>
		{{ Form::text('cognome', null, ['placeholder' => 'Cognome', 'id' => 'cognome']) }}
		@if ($errors->first('cognome'))
			@foreach ($errors->get('cognome') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
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
		{{ Form::submit('Modifica') }}
        <br>
	{{ Form::close() }}
</div>
@endsection
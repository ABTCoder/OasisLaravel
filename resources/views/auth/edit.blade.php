@extends('layouts.public')

@section('title', 'Modifica')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="account_box">
    <h2> Modifica </h2>
	{{ Form::open(array('route' => 'editaccount.save')) }}
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
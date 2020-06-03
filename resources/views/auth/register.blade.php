@extends('layouts.public')

@section('title', 'Registrati')

@section('asset')
<script>
    var url = '/' + "{{ Route::currentRouteName() }} ";
    var actionUrl = "{{ route('register') }}";
    var formId = 'registerform';
	var method = 'POST';
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="account_box">
    <h2> Registrati </h2>
    {{ Form::open(array('route' => 'register','id'=>'registerform')) }}
	@csrf
    {{ Form::text('nome', '', ['placeholder' => 'Nome', 'id' => 'nome']) }}
    <div  class="errormsg"></div>
    <br>
    {{ Form::text('cognome', '', ['placeholder' => 'Cognome', 'id' => 'cognome']) }}
    <div id="error_msg" class="errormsg" ></div>
    <br>
    {{ Form::text('username', '', ['placeholder' => 'Username', 'id' => 'username']) }}
    <div id="error_msg" class="errormsg" ></div>
    <br>
    {{ Form::text('email', '', ['placeholder' => 'Email', 'id' => 'email']) }}
    <div id="error_msg" class="errormsg"></div>
    <br>
    {{ Form::password('password', ['placeholder' => 'Password', 'id' => 'password']) }}
    <div id="error_msg" class="errormsg"></div>
    <br>
    {{ Form::password('password_confirmation', ['placeholder' => 'Conferma Password', 'id' => 'password_confirmation']) }}
    <div id="error_msg" class="errormsg"></div>
    <br>
    {{ Form::text('residenza', null, ['placeholder' => 'Indirizzo di residenza', 'id' => 'residenza']) }}
    <div id="error_msg" class="errormsg"></div>
    <br>
    <div class="date_job">
        {{ Form::date('data_nasc', null, ['placeholder' => 'Data di nascita', 'id' => 'data_nasc']) }}
      
        {{ Form::select('occupazione', ['Studente' => 'Studente', 'Operaio' => 'Operaio', 'Libero professionista' => 'Libero professionista', 
										'Pubblica sicurezza' => 'Pubblica Sicurezza', 'Medico' => 'Medico', 'Impiegato' => 'Impiegato',
										'Insegnante' => 'Insegnante'], null, ['placeholder' => 'Professione','id' => 'occupazione']) }}
                                                                                
        <div id="error_msg" class="errormsg"></div>
        <div id="error_msg" class="errormsg"></div>
        
    </div>

    <br>
    {{ Form::submit('Registrati',['id'=>'adduser']) }}
    <br>
    {{ Form::close() }}
    <b> Possiedi già un account? <a href="{{ route('login') }}"> ACCEDI </a> </b>
</div>
@endsection
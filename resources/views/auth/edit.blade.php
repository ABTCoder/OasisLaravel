@extends('layouts.public')

@section('title', 'Modifica')

@section('asset')
<script>
    var url = '/' + "{{ Route::currentRouteName() }} ";
    var actionUrl = "{{ route('editaccount.save') }}";
    var formId = 'editform';
    var method = 'POST';
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div class="account_box">
    <h2> Modifica </h2>
    {{ Form::model($user, array('route' => 'editaccount.save', 'id' => 'editform')) }}
    @csrf
    {{ Form::text('email', null, ['placeholder' => 'Email', 'id' => 'email']) }}
    <div id='error_email' class="errormsg"></div>
    <br>
    {{ Form::password('oldpassword', ['placeholder' => 'Vecchia password', 'id' => 'oldpassword']) }}
    <div id='error_oldpassword' class="errormsg"></div>
    <br>
    {{ Form::password('password', ['placeholder' => 'Nuova password', 'id' => 'password']) }}
    <div id='error_password' class="errormsg"></div>
    <br>
    {{ Form::password('password_confirmation', ['placeholder' => 'Conferma Password', 'id' => 'password_confirmation']) }}
    <br>
    {{ Form::text('nome', null, ['placeholder' => 'Nome', 'id' => 'nome']) }}
    <div id='error_nome' class="errormsg"></div>
    <br>
    {{ Form::text('cognome', null, ['placeholder' => 'Cognome', 'id' => 'cognome']) }}
    <div id='error_cognome' class="errormsg"></div>
    <br>
    {{ Form::text('residenza', null, ['placeholder' => 'Indirizzo di residenza', 'id' => 'residenza']) }}
    <div id='error_residenza' class="errormsg"></div>
    <br>
    <div id='error_msg' class="errormsg"></div>
    <div class="date_job">
        {{ Form::date('data_nasc', null, ['placeholder' => 'Data di nascita', 'id' => 'data_nasc']) }}
        {{ Form::select('occupazione', ['Studente' => 'Studente', 'Operaio' => 'Operaio', 'Libero professionista' => 'Libero professionista', 
										'Pubblica sicurezza' => 'Pubblica Sicurezza', 'Medico' => 'Medico', 'Impiegato' => 'Impiegato',
										'Insegnante' => 'Insegnante'], null, ['placeholder' => 'Professione','id' => 'occupazione']) }}
        <div id='error_data_nasc' class="errormsg"></div>
        <br>
        <div id='error_occupazione' class="errormsg"></div>
    </div>

    <br>
    {{ Form::submit('Modifica', ['id' => 'adduser']) }}
    <br>
    {{ Form::close() }}
</div>
@endsection
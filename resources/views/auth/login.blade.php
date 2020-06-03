@extends('layouts.public')

@section('title', 'Accedi')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div id="login" class="account_box">
    <h2> Accedi </h2>
	{{ Form::open(array('route' => 'login')) }}
		@csrf
		{{ Form::text('username', '', ['class' => 'input','id' => 'username', 'placeholder' => 'Username']) }}
        <br>
		{{ Form::password('password', ['class' => 'input', 'id' => 'password', 'placeholder' => 'Password']) }}
        <br>
        <br>
		{{ Form::submit('Accedi') }}
		<br>
		<b> Non possiedi ancora un account? <a href="{{ route('register') }}"> REGISTRATI </a> </b>
		@if ($errors->first('username'))
			@foreach ($errors->get('username') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
		@if ($errors->first('password'))
			@foreach ($errors->get('password') as $message)
			<div id="error_msg">{{ $message }}</div>
			@endforeach
		@endif
	{{ Form::close() }}
</div>
@endsection
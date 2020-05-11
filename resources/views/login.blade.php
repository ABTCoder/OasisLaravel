@extends('layouts.public')

@section('title', 'Accedi')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}" >
@endsection

@section('content')
<div id="login" class="account_box">
    <h2> Accedi </h2>
    <form action="login.html" method="post">
        <input type="text" placeholder="Username" >
        <br>
        <input type="password" placeholder="Password">
        <br>
        <br>
		<input type="submit" value="Accedi">
    </form>
    <br>
    <b> Non possiedi ancora un account? <a href="{{ route('signup') }}"> REGISTRATI </a> </b>
    <div id="error_msg"> Password errata! </div>
</div>
@endsection
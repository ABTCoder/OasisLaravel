@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')

    <div class="side_container">
        <h1> AREA STAFF </h1>
        <h2> SELEZIONA UN'OPZIONE DALLA BARRA DI NAVIGAZIONE</h2>
    </div>
</div>
@endsection
@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')

    <div class="side_container" id="staffmainview">
        <img id="staffpic" src="{{ asset('images/ui_images/oasis_home_background.jpg') }}">
        <div class="centeredstaff">
            <div id="txt_staff1">OASIS STAFF</div>
            <div id="txt_staff2">Seleziona una voce dalla barra di navigazione laterale</div>		
        </div>
    </div>
</div>
@endsection
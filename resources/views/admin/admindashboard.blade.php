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
        <img id="adminpic" src="{{ asset('images/ui_images/oasis_home_background.jpg') }}">
		<div class="centeredadmin">
			<div id="txt_admin1">OASIS ADMIN</div>
			<div id="txt_admin2">Seleziona una voce dalla barra di navigazione laterale</div>		
		</div>
    </div>
</div>
</div>
@endsection
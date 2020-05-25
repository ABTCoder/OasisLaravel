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
        <div class="sc_content">
            <h1 id="sc_title">Elimina utente</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <form>
                    <input type="submit" value="Elimina">
                    <br> 
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
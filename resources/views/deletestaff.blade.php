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
			{{ Form::open(array('route' => 'addstaff', 'id' => 'addstaff')) }}
            <h1 id="sc_title">Elimina staff</h1>
            <div class="addstaff_box" id="admin_dash_box">
					<div id="txt_delstaff">Seleziona un membro dello staff da eliminare</div>
				{{ Form::select('staff', $subCategories, null, ['id' => 'userlist']) }}
				{{ Form::submit('Elimina', ['id' => 'deletebtn']) }}
                    <br> 
            </div>
			{{ Form::close() }}
        </div>
    </div>
</div>
</div>
@endsection
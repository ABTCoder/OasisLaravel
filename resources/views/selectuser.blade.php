@extends('layouts.public')

@section('title', 'Area Admin')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/admindashboard.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectproduct.css') }}" >

<script>
    var type = "";
    var routeName = "{{ Route::currentRouteName() }}";
    var msgUrl = "{{route('admincompletemsg', 2 )}}";
    var urldelete = "{{ route('deletestaff.delete') }}";
    if (routeName === 'deleteuser') {
        urldelete = "{{ route('deleteuser.delete') }}";
        msgUrl = "{{ route('admincompletemsg', 3 ) }}";
    }
</script>
@endsection

@section('content')
<div class="admin_main" id="main">
    @include ('layouts.adminsidenav')
    <div class="side_container" id="adminmainview">
        <div class="sc_content">
            @if(Route::is('deletestaff'))
            <h1 id="sc_title">Elimina staff</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <div id="txt_delstaff">Seleziona un membro dello staff da eliminare</div>
                <br> 
            </div>
            @else
            <h1 id="sc_title">Elimina utente</h1>
            <div class="addstaff_box" id="admin_dash_box">
                <div id="txt_delstaff">Seleziona un utente da eliminare</div>
                <br> 
            </div>
            @endif
            @isset($users)
            <div class="list_box">

                <hr>
                @foreach ($users as $user)
                <div id="{{$user->id}}" class="productrow" >
                    <h1 id="name"> ID: {{$user->id}} - {{ $user->username }} - {{ $user->nome}} {{ $user->cognome}}  </h1>
                </div>
                <hr>
                @endforeach
            </div>
            <button class ="deletebtn" id="delete" data-token="{{ csrf_token() }}" > Elimina </button>
            @else <h1 id="complete_msg"> Non ci sono utenti </h1>
            @endisset
        </div>
    </div>
</div>
@endsection
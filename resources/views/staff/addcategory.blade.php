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
		@isset($category)
		{{ Form::model($category, array('route' => array('editcategory.save', $category->id))) }}
		@method('PUT')
                <h1 id="sc_title">Modifica categoria</h1><br>
		<!-- FINE AGGIORNA CATEGORIA -->
		@else
		{{ Form::open(array('route' => 'addcategory.store', 'nome' => 'addcategory')) }}
                <h1 id="sc_title">Aggiungi categoria</h1><br>
		@endisset
            @csrf    
            <div class="out_prodname">
                <h3 class="sc_hint" id="prodname_hint">Nome categoria</h3>
                    {{ Form::text('nome', null, ['class' => 'sc_textinput', 'id' => 'nome']) }}
                <div class="errormsg"> 
                    @if ($errors->first('nome'))
                    @foreach ($errors->get('nome') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
		</div>
            </div>
            <div class="button_container">
			@isset($category)
			{{ Form::submit('Salva', ['class' => 'publish']) }}
			@else
			{{ Form::submit('Aggiungi', ['class' => 'publish']) }}
			@endisset
              
        {{ Form::close() }}
    </div>
</div>
@endsection
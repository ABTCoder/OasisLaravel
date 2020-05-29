@extends('layouts.public')

@section('title', 'Area Staff')

@section('asset')
<script>
var url = '/' + "{{ Route::currentRouteName() }} ";
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/staffdashboard.css') }}" >
@endsection

@section('content')
<div class="staff_main">
    @include ('layouts.staffsidenav')
    <div class="side_container">
		@isset($product)
		{{ Form::model($product, array('route' => array('editproduct.save', $product->codice),'id' => 'productform', 'files' => true)) }}
		@method('PUT')
                <h1 id="sc_title">Modifica prodotto</h1><br>
		<!-- FINE AGGIORNA PRODOTTO -->
		@else
		{{ Form::open(array('route' => 'addproduct.store', 'id' => 'productform', 'files' => true)) }}
                <h1 id="sc_title">Aggiungi prodotto</h1><br>
		@endisset
            @csrf    
            <div class="out_prodname">
                <h3 class="sc_hint" id="prodname_hint">Nome Prodotto</h3>
				{{ Form::text('nome', null, ['class' => 'sc_textinput', 'id' => 'nome']) }}
                <div class="errormsg"> 
					@if ($errors->first('nome'))
                    @foreach ($errors->get('nome') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
				</div>
            </div>
            <div class="alpha">
                <div class="imagecontainer">
					{{ Form::label('immagine', 'Immagine', ['class' => 'label-input', 'id' => 'imagelabel']) }}
					<br>
					<div class="nestedpreview">
					<img id="preview" src="#">
						</div>
					<br>
					{{ Form::file('immagine', ['class' => 'sc_image', 'id' => 'image']) }}
                    <div class="errormsg">   
					@if ($errors->first('image'))
                    <ul class="errors">
                        @foreach ($errors->get('image') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif 
					</div>
                </div>

                <div class="bravo">
                    <h3 class="sc_hint">Descrizione breve</h3>
					{{ Form::textarea('desc_breve', null, ['class' => 'sc_textinput', 'id' => 'desc_breve']) }}
                    <div class="errormsg">   
						@if ($errors->first('desc_breve'))
                        @foreach ($errors->get('desc_breve') as $message)
                        {{ $message }}
                        @endforeach
                        @endif </div>
                    <h3 class="sc_hint">Prezzo</h3>
					{{ Form::text('prezzo', null, ['class' => 'sc_textinput', 'id' => 'prezzo']) }}
                    <div class="errormsg"> 
						@if ($errors->first('prezzo'))
                        @foreach ($errors->get('prezzo') as $message)
                        {{ $message }}
                        @endforeach
                        @endif 
					</div>

                    <h3 class="sc_hint">Sconto (%) </h3>
					{{ Form::text('sconto', null, ['class' => 'sc_textinput', 'id' => 'sconto']) }}
                    <div class="errormsg"> 
						@if ($errors->first('sconto'))
						@foreach ($errors->get('sconto') as $message)
						{{ $message }}
						@endforeach
						@endif 
					</div>
                </div>
            </div>

            <div class="charlie">
                <div class="charlie_inner">
                    <h3 class="sc_hint">Marca</h3>
					{{ Form::text('marca', null, ['class' => 'sc_textinput', 'id' => 'marca']) }}
                    <p class="errormsg"> 
						@if ($errors->first('marca'))
						@foreach ($errors->get('marca') as $message)
						{{ $message }}
						@endforeach
						@endif 
					</p>
                </div>

                <div class="charlie_inner" id="charlie_subcat"><h3 class="sc_hint">Sottocategoria</h3>
				{{ Form::select('sottocategoria', $subCategories, null, ['class' => 'select_cat','id' => 'sottocategoria']) }}
                </div>
            </div>
            <div>
                <h3 class="sc_hint">Descrizione esaustiva</h3>
				{{ Form::textarea('desc_esaustiva', null, ['class' => 'sc_textinput', 'id' => 'desc_esaustiva']) }}
                <div class="errormsg"> 
					@if ($errors->first('desc_esaustiva'))
                    @foreach ($errors->get('desc_esaustiva') as $message)
                    {{ $message }}
                    @endforeach
                    @endif 
				</div> 

            </div>
            <div class="button_container">
			@isset($product)
			{{ Form::submit('Salva', ['class' => 'publish']) }}
			@else
			{{ Form::submit('Aggiungi', ['class' => 'publish']) }}
			@endisset
              
        {{ Form::close() }}
    </div>
</div>
@endsection
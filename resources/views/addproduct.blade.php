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
		
		{{ Form::open(array('route' => 'addproduct.store', 'id' => 'addproduct', 'files' => true)) }}
        <form enctype="multipart/form-data" method="post" action="{{ route('addproduct.store')  }}">
            <h1 id="sc_title">Aggiungi prodotto</h1><br>
            @csrf    
            <div class="out_prodname">
                <h3 class="sc_hint">Nome Prodotto</h3>
				{{ Form::text('nome', '', ['class' => 'sc_textinput', 'id' => 'nome']) }}
                <p style="color:red"> 
					@if ($errors->first('nome'))
                    @foreach ($errors->get('nome') as $message)
                    {{ $message }}
                    @endforeach 
                    @endif
				</p>
            </div>
            <div class="alpha">
                <div>
					{{ Form::label('immagine', 'Immagine', ['class' => 'label-input']) }}
					{{ Form::file('immagine', ['class' => 'sc_image', 'id' => 'image']) }}
                    <p style="color:red">    
					@if ($errors->first('image'))
                    <ul class="errors">
                        @foreach ($errors->get('image') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif 
					</p>
                </div>

                <div class="bravo">
                    <h3 class="sc_hint">Descrizione breve</h3>
					{{ Form::text('desc_breve', '', ['class' => 'sc_textinput', 'id' => 'desc_breve']) }}
                    <p style="color:red">   
						@if ($errors->first('desc_breve'))
                        @foreach ($errors->get('desc_breve') as $message)
                        {{ $message }}
                        @endforeach
                        @endif </p>
                    <h3 class="sc_hint">Prezzo</h3>
					{{ Form::text('prezzo', '', ['class' => 'sc_textinput', 'id' => 'prezzo']) }}
                    <p style="color:red">  
						@if ($errors->first('prezzo'))
                        @foreach ($errors->get('prezzo') as $message)
                        {{ $message }}
                        @endforeach
                        @endif 
					</p>

                    <h3 class="sc_hint">Sconto membri (%) </h3>
					{{ Form::text('sconto', '', ['class' => 'sc_textinput', 'id' => 'sconto']) }}
                    <p style="color:red">
						@if ($errors->first('sconto'))
						@foreach ($errors->get('sconto') as $message)
						{{ $message }}
						@endforeach
						@endif 
					</p>
                </div>
            </div>

            <div class="charlie">
                <div class="charlie_inner">
                    <h3 class="sc_hint">Marca</h3>
					{{ Form::text('marca', '', ['class' => 'sc_textinput', 'id' => 'marca']) }}
                    <p style="color:red">  
						@if ($errors->first('marca'))
						@foreach ($errors->get('marca') as $message)
						{{ $message }}
						@endforeach
						@endif 
					</p>
                </div>

                <div class="charlie_inner"><h3 class="sc_hint">Sottocategoria</h3>
				{{ Form::select('sottocategoria', $subCategories, '', ['class' => 'select_cat','id' => 'sottocategoria']) }}
                </div>
            </div>
            <div>
                <h3 class="sc_hint">Descrizione esaustiva</h3>
				{{ Form::text('desc_esaustiva', '', ['class' => 'sc_textinput', 'id' => 'desc_esaustiva']) }}
                <p style="color:red"> 
					@if ($errors->first('desc_esaustiva'))
                    @foreach ($errors->get('desc_esaustiva') as $message)
                    {{ $message }}
                    @endforeach
                    @endif 
				</p> 

            </div>
            <div class="button_container">
			{{ Form::submit('Aggiungi', ['class' => 'publish']) }}
              
        {{ Form::close() }}

    </div>
</div>
@endsection
@extends('layouts.public')

@section('title', 'Prodotti')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
@endsection

@section('content')
<div class="products_main">
    <div class="sidenav">
        @isset($categories)
        @foreach ($categories as $category)
        <div class="cat">
            <a href="{{ route('products2', [$category->nome]) }}" class="cat_name"> {{ $category->nome }}</a>
            <img src="{{ asset('images/ui_images/arrow.png') }}">
            @isset($subCategories)
            <div class="sub">
                @foreach($subCategories as $subCategory)
                @if ($subCategory->categoria == $category->nome) 
                <a href="{{ route('products3', [$subCategory->id]) }}" class="subcat_name"> {{ $subCategory->nome }} </a>
                <br>
                @endif 
                @endforeach
            </div>
            @endisset
        </div>
        <hr>
        @endforeach
        @endisset
    </div>
    <!-- fine sidenav -->		

	@isset($products)
    <div class="products_content">
        <form class="search_bar">
            <input type="text" placeholder="Ricerca">
            <input type="submit" value="GO">
        </form>
		@isset($catString)
		<div class="products_cat"> Prodotti visualizzati per: {{ $catString }} </div>
		@endisset
        <div class="products_box">
            <div class="row">
                @foreach ($products as $product)
                <div class="card">
                    <a  style="text-decoration:none" href="{{ route('viewproduct', [$product->codice]) }}">
                        <div class="card_img_container">
                            @include('helpers/imgProducts', ['imgFile' => $product->immagine])
						</div>
                        <div class="card_text">
                            <div class="card_info">
                                <h1  class="name">{{ $product->nome }}</h1>
                                <span class="description">{{ $product->desc_breve }}</span>
                            </div>
                            <div class="card_prices">
                                @include('helpers/priceProducts')
                            </div>	
                        </div>
                    </a>   
                </div>
                @endforeach  
            </div>                      
        </div>
        <nav class="page_nav">
			<!--Paginazione-->
			@include('pagination.paginator', ['paginator' => $products])
        </nav>
    </div>
	@endisset
</div>
@endsection

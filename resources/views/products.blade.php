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
            <a class="cat_name"> {{ $category->nome }}</a>
			<img src="{{ asset('images/ui_images/arrow.png') }}">
			@isset($subCategories)
            <div class="sub">
				@foreach($subCategories as $subCategory)
                @if ($subCategory->categoria == $category->nome) 
				<a class="subcat_name"> {{ $subCategory->nome }} </a>
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
			
			
    <div class="products_content">
        <form class="search_bar">
            <input type="text" placeholder="Ricerca">
            <input type="submit" value="GO">
        </form>
        <div class="products_box">
            <div class="row">
				@isset($products)
				@foreach ($products as $product)
				<div class="card">
					<a  style="text-decoration:none" href="{{ route('viewproduct') }}">
						@include('helpers/imgProducts', ['imgFile' => $product->immagine])
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
				@endisset      
            </div>                      
        </div>
        <nav class="page_nav">
            <a id="ctrl"> &lt; </a>
            <a> 1 </a>
            <a> 2 </a>
            <a> 3 </a>
            <a> 4 </a>
            <a> 5 </a>
            <a> 6 </a>
            <a> 7 </a>
            <a> 8 </a>
            <a> 9 </a>
            <a id="ctrl"> &gt; </a>
        </nav>
    </div>
</div>
@endsection
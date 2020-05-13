@extends('layouts.public')

@section('title', 'Prodotti')

@section('asset')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
@endsection

@section('content')
<div class="products_main">
            <div class="sidenav">
                <div class="cat">
                    <a> Categoria 1 <img src="{{ asset('images/ui_images/arrow.png') }}"> </a>
                    <div class="sub">
                        <a> Sottocategoria 1.1 </a>
                        <a> Sottocategoria 1.2 </a>
                    </div>
                    <hr>
                </div>
                <div class="cat">
                    <a> Categoria 2 <img src="{{ asset('images/ui_images/arrow.png') }}"> </a>
                    <div class="sub">
                        <a> Sottocategoria 2.1 </a>
                        <a> Sotttocategoria 2.2 </a>
                    </div>
                    <hr>
                </div>
				   <div class="cat">
                    <a> Categoria 3 <img src="{{ asset('images/ui_images/arrow.png') }}"> </a>
                    <div class="sub">
                        <a> Sottocategoria 3.1 </a>
                        <a> Sottocategoria 3.2 </a>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="products_content">
                <form class="search_bar">
                    <input type="text" placeholder="Ricerca">
                    <input type="submit" value="GO">
                </form>
                <div class="products_box">
                    <div class="row">

                        <div class="card">
                            <a  style="text-decoration:none" href="{{ route('viewproduct') }}">
                                <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone">
                                <div class="card_text">
                                    <div class="card_info">
                                        <h1  class="name">00000000000000000000000000000000000000000000000000</h1>
                                        <span class="description">00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000</span>
                                    </div>
                                    <div class="card_prices">
                                        <div class="og_price">19.99€</div>
                                        <div class="discount">-%20 Sconto</div>
                                        <div class="discounted_price">99999.99€</div>
                                    </div>	
                                </div>
                            </a>   
                        </div>                                            
                        <div class="card">
                            <a  style="text-decoration:none" href="{{ route('viewproduct') }}">
                                <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone">
                                <div class="card_text">
                                    <div class="card_info">
                                        <h1  class="name">Nikon D3500</h1>
                                        <span class="description">Nikon D3500 Fotocamera Reflex Digitale con Obiettivo Nikkor AF-P 18-55, F/3.5-5.6G VR DX, 24.2 Megapixel, LCD 3", SD da 16 GB 300x Premium Lexar, Nero</span>
                                    </div>
                                    <div class="card_prices">
                                        <div class="og_price">19.99€</div>
                                        <div class="discount">-%20 Sconto</div>
                                        <div class="discounted_price">1200.99€</div>
                                    </div>	
                                </div>
                            </a>   
                        </div>                                            
                        <div class="card">
                            <a  style="text-decoration:none" href="{{ route('viewproduct') }}">
                                <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone">
                                <div class="card_text">
                                    <div class="card_info">
                                        <h1  class="name">Nome Prodotto</h1>
                                        <span class="description">Descrizione</span>
                                    </div>
                                    <div class="card_prices">
                                        <div class="og_price">19.99€</div>
                                        <div class="discount">-%20 Sconto</div>
                                        <div class="discounted_price">19.99€</div>
                                    </div>	
                                </div>
                            </a>   
                        </div>                                            
                        <div class="card">
                            <a  style="text-decoration:none" href="{{ route('viewproduct') }}">
                                <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone">
                                <div class="card_text">
                                    <div class="card_info">
                                        <h1  class="name">Nome Prodotto</h1>
                                        <span class="description">Descrizione</span>
                                    </div>
                                    <div class="card_prices">
                                        <div class="og_price">19.99€</div>
                                        <div class="discount">-%20 Sconto</div>
                                        <div class="discounted_price">19.99€</div>
                                    </div>	
                                </div>
                            </a>   
                        </div>                                            
                        <div class="card">
                            <a  style="text-decoration:none" href="{{ route('viewproduct') }}">
                                <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone">
                                <div class="card_text">
                                    <div class="card_info">
                                        <h1  class="name">Nome Prodotto</h1>
                                        <span class="description">Descrizione</span>
                                    </div>
                                    <div class="card_prices">
                                        <div class="og_price">19.99€</div>
                                        <div class="discount">-%20 Sconto</div>
                                        <div class="discounted_price">19.99€</div>
                                    </div>	
                                </div>
                            </a>   
                        </div>                                            
                        <div class="card">
                            <a  style="text-decoration:none" href="{{ route('viewproduct') }}">
                                <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone">
                                <div class="card_text">
                                    <div class="card_info">
                                        <h1  class="name">Nome Prodotto</h1>
                                        <span class="description">Descrizione</span>
                                    </div>
                                    <div class="card_prices">
                                        <div class="og_price">19.99€</div>
                                        <div class="discount">-%20 Sconto</div>
                                        <div class="discounted_price">19.99€</div>
                                    </div>	
                                </div>
                            </a>   
                        </div>  
                        
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
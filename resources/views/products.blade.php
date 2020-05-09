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
                        <div class="column">
                            <div class="card">
                                <a  style="text-decoration:none" href="account.html">
                                    <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone"   >
                                    <h1  class="name">Nome Prodotto</h1>
                                    <p class="description">Descrizione</p>   
                                    <p class="price">19.99€</p>                                               
                                </a>   
                            </div>                                            
                        </div>
                        <div class="column">
                            <div class="card">
                                <a  style="text-decoration:none" href="account.html">
                                    <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone"   >
                                    <h1  class="name">Nome Prodotto</h1>
                                    <p class="description">Descrizione</p>   
                                    <p class="price">19.99€</p>                                               
                                </a>   
                            </div>                                            
                        </div>
                        <div class="column">
                            <div class="card">
                                <a  style="text-decoration:none" href="account.html">
                                    <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone"   >
                                    <h1  class="name">Nome Prodotto</h1>
                                    <p class="description">Descrizione</p>   
                                    <p class="price">19.99€</p>                                               
                                </a>   
                            </div>                                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <div class="card">
                                <a  style="text-decoration:none" href="account.html">
                                    <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone"   >
                                    <h1  class="name">Nome Prodotto</h1>
                                    <p class="description">Descrizione</p>    
                                    <p class="price">19.99€</p>                                               
                                </a>   
                            </div>                                            
                        </div>
                        <div class="column">
                            <div class="card">
                                <a  style="text-decoration:none" href="account.html">
                                    <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone"   >
                                    <h1  class="name">Nome Prodotto</h1>
                                    <p class="description">Descrizione</p>   
                                    <p class="price">19.99€</p>                                               
                                </a>   
                            </div>                                            
                        </div>
                        <div class="column">
                            <div class="card">
                                <a  style="text-decoration:none" href="account.html">
                                    <img src="{{ asset('images/ui_images/smartphone.png') }}" alt="Smartphone"   >
                                    <h1  class="name">Nome Prodotto</h1>
                                    <p class="description">Descrizione</p>   
                                    <p class="price">19.99€</p>                                               
                                </a>   
                            </div>                                            
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
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
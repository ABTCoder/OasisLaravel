<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::view('/', 'home')
        ->name('home');

Route::get('/products', 'ProductController@showProductsAll')
        ->name('products');
		
Route::get('/products/selCat/{catId}', 'ProductController@showProductsCat')
        ->name('products2');

Route::get('/products/selSubCat/{subCatId}', 'ProductController@showProductsSubCat')
        ->name('products3');
		
Route::get('/products/viewproduct/{productCode}', 'ProductController@showProduct')
        ->name('viewproduct');

Route::view('/howtobuy', 'howtobuy')
        ->name('howtobuy');

Route::view('/privacypolicy', 'privacypolicy')
        ->name('privacypolicy');

Route::view('/about', 'about')
        ->name('about');

Route::view('/login', 'login')
        ->name('login');

Route::view('/signup', 'signup')
        ->name('signup');

Route::view('/staff', 'staffdashboard')
        ->name('staff');

Route::get('/staff/selectproduct', 'StaffController@showProductsList')
        ->name('selectproduct');



Route::get('/staff/addproduct', 'StaffController@addProduct') //visualizza la form vuota 
        ->name('addproduct');

Route::post('/staff/addproduct', 'StaffController@storeProduct') //al sumbit della form attiva il processo di validazione, che,
        //se va a buon fine, gestirà memorizzando nella tabella prodotti del db il prodotto inserito.
        ->name('addproduct.store');

Route::view('/admindashboard', 'admindashboard')
        ->name('admindashboard');

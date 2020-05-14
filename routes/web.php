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
		
Route::get('/products', 'PublicController@showProductsAll')
        ->name('products');
		
Route::get('/products/selSubCat/{subCatId}', 'PublicController@showProductsSubCat')
        ->name('products2');
		
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

Route::view('/staffdashboard', 'staffdashboard')
        ->name('staffdashboard');

Route::get('/selectproduct', 'PublicController@showProductsList')
        ->name('selectproduct');

Route::view('/viewproduct', 'viewproduct')
        ->name('viewproduct');

Route::view('/admindashboard', 'admindashboard')
        ->name('admindashboard');
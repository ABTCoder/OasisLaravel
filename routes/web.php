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

Route::view('/howtobuy', 'howtobuy')
        ->name('howtobuy');

Route::view('/privacypolicy', 'privacypolicy')
        ->name('privacypolicy');

Route::view('/about', 'about')
        ->name('about');


//Rotte prodotti
Route::get('/products', 'ProductController@showProductsAll')
        ->name('products');

Route::get('/products/selCat/{catId}', 'ProductController@showProductsCat')
        ->name('products2');

Route::get('/products/selSubCat/{subCatId}', 'ProductController@showProductsSubCat')
        ->name('products3');

Route::get('/products/search/', 'ProductController@showProductsSearch')
        ->name('products4');

Route::get('/products/viewproduct/{productCode}', 'ProductController@showProduct')
        ->name('viewproduct');


// Rotte per l'accesso
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');
Route::post('register', 'Auth\RegisterController@register');

//Rotte per la modifica
Route::get('/editaccount', 'Auth\EditController@editAccount')
        ->name('editaccount');
Route::post('/editaccount', 'Auth\EditController@saveAccount')
        ->name('editaccount.save');

//Rotte Staff
Route::get('/staff', 'StaffController@index')
        ->name('staff');

Route::get('/staff/addcategory', 'StaffController@addCategory') //visualizza la form vuota 
        ->name('addcategory');

Route::post('/staff/addcategory', 'StaffController@storeCategory')
        ->name('addcategory.store');

Route::get('/staff/editcategory', 'StaffController@showCategoriesList')
        ->name('editcategory');

Route::get('/staff/editcategory/{categoryCode}', 'StaffController@editCategory') //visualizza la form vuota 
        ->name('editcategory.edit');

Route::put('/staff/editcategory/{categoryCode}', 'StaffController@saveCategory') //visualizza la form vuota 
        ->name('editcategory.save');

Route::get('/staff/deletecategory', 'StaffController@showCategoriesList')
        ->name('deletecategory');

Route::delete('/staff/deletecategory', 'StaffController@deleteCategory')
        ->name('deletecategory.delete');

Route::get('/staff/addsubcategory', 'StaffController@addSubcategory') //visualizza la form vuota 
        ->name('addsubcategory');

Route::post('/staff/addsubcategory', 'StaffController@storeSubcategory')
        ->name('addsubcategory.store');

Route::get('/staff/editsubcategory', 'StaffController@showSubcategoriesList')
        ->name('editsubcategory');

Route::get('/staff/editsubcategory/{subcategoryCode}', 'StaffController@editSubcategory') //visualizza la form vuota 
        ->name('editcategory.edit');

Route::put('/staff/editsubcategory/{categoryCode}', 'StaffController@saveSubcategory') //visualizza la form vuota 
        ->name('editsubcategory.save');

Route::get('/staff/deletesubcategory', 'StaffController@showSubcategoriesList')
        ->name('deletesubcategory');

Route::delete('/staff/deletesubcategory', 'StaffController@deleteSubcategory')
        ->name('deletesubcategory.delete');

Route::get('/staff/addproduct', 'StaffController@addProduct') //visualizza la form vuota 
        ->name('addproduct');

Route::post('/staff/addproduct', 'StaffController@storeProduct')
        ->name('addproduct.store');

Route::get('/staff/editproduct', 'StaffController@showProductsList')
        ->name('editproduct');

Route::get('/staff/editproduct/search', 'StaffController@showProductsSearch')
        ->name('editproduct2');

Route::get('/staff/editproduct/{productCode}', 'StaffController@editProduct') //visualizza la form vuota 
        ->name('editproduct.edit');

Route::post('/staff/editproduct/{productCode}', 'StaffController@saveProduct') //visualizza la form vuota 
        ->name('editproduct.save');

Route::get('/staff/deleteproduct', 'StaffController@showProductsList')
        ->name('deleteproduct');

Route::get('/staff/deleteproduct/search', 'StaffController@showProductsSearch')
        ->name('deleteproduct2');

Route::delete('/staff/deleteproduct', 'StaffController@deleteProduct')
        ->name('deleteproduct.delete');

Route::get('/staff/completemsg/{id}', 'StaffController@completeMsg')
        ->name('completemsg');

//Rotte per l'admin
Route::get('/admin', 'AdminController@index')
        ->name('admin');

Route::get('/admin/completemsg/{id}', 'AdminController@completeMsg')
        ->name('admincompletemsg');

Route::get('/admin/editstaff', 'AdminController@showStaff')
        ->name('showstaff');

Route::get('/admin/editstaff/{id}', 'AdminController@editStaff')
        ->name('editstaff');

Route::post('/admin/addstaff', 'AdminController@storeStaff')
        ->name('addstaff.store');

Route::post('/admin/editstaff/{id}', 'AdminController@saveStaff')
        ->name('editstaff.save');

Route::delete('/admin/deletestaff', 'AdminController@deleteStaff')
        ->name('deletestaff.delete');

Route::get('/admin/deletestaff', 'AdminController@showdeleteStaff')
        ->name('deletestaff');

Route::get('/admin/addstaff', 'AdminController@showStaffForm')
        ->name('addstaff');

Route::delete('/admin/deleteuser', 'AdminController@deleteUser')
        ->name('deleteuser.delete');

Route::get('/admin/deleteuser', 'AdminController@showUsers')
        ->name('deleteuser');
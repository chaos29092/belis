<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about-us',function(){
   return view('about_us');
});

Route::get('products',function(){
   return view('products') ;
});

Route::get('products/category',function(){
    return view('products_category') ;
});

Route::get('products/product_detail',function(){
    return view('product_detail') ;
});

Route::get('faq',function(){
    return view('faq') ;
});

Route::get('contact-us',function(){
    return view('contact_us') ;
});
Auth::routes();

Route::get('/home', 'AdminController@index');


<?php

Route::get('/', 'HomeController@index');
Route::get('about-us','HomeController@about_us');
Route::get('faq','HomeController@faq');
Route::get('contact-us','HomeController@contact_us');

Route::get('products','HomeController@all_products');
Route::get('products/categories/{id}','HomeController@category');
Route::get('products/{product}','HomeController@product_detail');

Route::get('news',function(){
    return view('news_list');
});

Route::get('new_detail',function(){
    return view('new_detail');
});


//admin
Auth::routes();

Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/categories', 'CategoriesController');

Route::get('home','ProductsController@index');

//summer note images upload and delete
Route::post('admin/images/{id}','ProductsController@image_upload');
Route::delete('admin/images','ProductsController@image_delete');


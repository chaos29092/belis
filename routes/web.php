<?php

Route::get('/', 'HomeController@index');
Route::get('about-us','HomeController@about_us');
Route::get('faq','HomeController@faq');
Route::get('contact-us','HomeController@contact_us');

Route::get('products','HomeController@all_products');
Route::get('products/categories/{id}','HomeController@category');
Route::get('products/{product}','HomeController@product_detail');

Route::get('news','HomeController@news_list');
Route::get('news/{page}','HomeController@new_detail');


//admin
Auth::routes();

Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/categories', 'CategoriesController');

//summer note pages images upload and delete
Route::post('admin/pages/images/{id}','PagesController@image_upload');
Route::delete('admin/pages/images','PagesController@image_delete');
Route::resource('/admin/pages','PagesController');

Route::get('home','ProductsController@index');

//summer note products images upload and delete
Route::post('admin/images/{id}','ProductsController@image_upload');
Route::delete('admin/images','ProductsController@image_delete');



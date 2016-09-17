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

Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/categories', 'CategoriesController');

Route::get('home','ProductsController@index');

Route::post('summernote/file',function(){
    if(\Request::file('file')){
        if (\Request::file('file')->isValid()){
            $destinationPath='./uploads/summernote/'.date('Y-m').'/';
            $filename=uniqid().'.'.\Request::file('file')
                    ->guessClientExtension();
            \Request::file('file')->move($destinationPath,$filename);
            //水印处理 使用了laravel image包 intervention/image

            echo substr($destinationPath.$filename, 1);
        }else{
            echo '错误，请重试!';
        }
    }
});


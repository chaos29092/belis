<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Requests;


class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.products');
    }

    public function edit(Product $product)
    {
        $categories = \App\Model\Category::all();
        return view('admin.product_edit',compact('product','categories'));
    }


}

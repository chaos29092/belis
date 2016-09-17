<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


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

    public function create()
    {
        $categories = \App\Model\Category::all();
        return view('admin.product_create',compact('categories'));
    }

    public function store(Request $request)
    {
        $product = New \App\Model\Product();

        $product->name = $request['name'];

        $product->save();

        return view('admin.products');
    }

    public function edit(Product $product)
    {
        $categories = \App\Model\Category::all();
        return view('admin.product_edit',compact('product','categories'));
    }

    public function update(Request $request,$id)
    {
        $product = \App\Model\Product::find($id);

        $product->name = $request['name'];
        $product->content = $request['content'];

        $product->save();

        return back();
    }


}

<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Category;
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
        $products = Product::orderBy('updated_at', 'desc')->select('id','name','category_id','updated_at')->paginate(20);
        $categories = Category::all();

        return view('admin.products',compact('products','categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product_create',compact('categories'));
    }

    public function store(Request $request)
    {
        $product = New Product();

        $product->name = $request['name'];

        $product->save();

        return view('admin.products');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product_edit',compact('product','categories'));
    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);

        $product->name = $request['name'];
        $product->content = $request['content'];

        $product->save();

        return back();
    }
}

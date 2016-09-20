<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('index',compact('categories'));
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function all_products()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        $products = Product::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();

        return view('products',compact('categories','products')) ;
    }

    public function category($id)
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        $products = Category::find($id)->products()->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        $category = Category::find($id);
        return view('products_category',compact('categories','products','category'));
    }

    public function product_detail(Product $product)
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();

        return view('product_detail',compact('categories','product'));
    }

    public function news_list()
    {
        $news = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->where('tag','new')->paginate(30);

        return view('news_list',compact('news'));
    }

    public function new_detail(Page $page)
    {
        return view('new_detail',compact('page'));
    }
}

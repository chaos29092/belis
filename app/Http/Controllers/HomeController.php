<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
}

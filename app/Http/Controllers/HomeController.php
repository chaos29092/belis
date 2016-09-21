<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\Page;
use Illuminate\Http\Request;
use Mail;

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
        $page = Page::where('tag','page')->where('name','about us')->first();
        return view('about_us',compact('page'));
    }

    public function faq()
    {
        $page = Page::where('tag','page')->where('name','faq')->first();
        return view('faq',compact('page'));
    }

    public function contact_us()
    {
        $page = Page::where('tag','page')->where('name','contact us')->first();
        return view('contact_us',compact('page'));
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

    public function submit(Request $request)
    {
        $form['name'] = $request->name;
        $form['email']=$request->email;
        $form['tel']=$request->tel;
        $form['message']=$request->message;
        $form['url']=$request->url;

        Mail::send('emails.mail',['form'=>$form], function ($message) {
            $message->from('web@belislaserbeauty.com', 'website');
            $message->to(['sunny.belis@hotmail.com','info@belislaserbeauty.com','chaos29092@gmail.com',]);
            $message->subject('Website Request');
        });

        return redirect('/submit_ok');
    }

    public function submit_ok()
    {
        return view('submit_ok');
    }

    public function sitemap()
    {
        echo simplexml_load_file('sitemap.xml')->asXML();
    }

}

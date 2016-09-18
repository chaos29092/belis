<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Storage;


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
        $this->validate($request, [
            'name' => 'required',
            'main_pic' => 'image',
            'category_pic' => 'image',
        ]);

        $product = New Product();

        $product->name = $request['name'];
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->category_id = $request['category_id'];
        $product->category_des = $request['category_des'];
        $product->des = $request['des'];
        $product->content = $request['content'];

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '.'.$entension;

            Storage::put($key,file_get_contents($request->file('main_pic')->getRealPath()));

            $product->main_pic = '/app/'.$key;
        }
        if ($request->file('category_pic')) {

            $filePath = $request->file('category_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '_category.'.$entension;

            Storage::put($key,file_get_contents($request->file('category_pic')->getRealPath()));
            $product->category_pic = '/app/'.$key;
        }

        $product->save();

        return redirect('/home');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $files = Storage::files('products/'.$product->id);

        return view('admin.product_edit',compact('product','categories','files'));
    }

    public function update(Request $request,Product $product)
    {
        $this->validate($request, [
            'name' => 'required',
            'main_pic' => 'image',
            'category_pic' => 'image',
        ]);

        $product->name = $request['name'];
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->category_id = $request['category_id'];
        $product->category_des = $request['category_des'];
        $product->des = $request['des'];
        $product->content = $request['content'];

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '.'.$entension;

            Storage::delete(str_replace("/app/","",$product['main_pic']));
            Storage::put($key,file_get_contents($request->file('main_pic')->getRealPath()));
            $product->main_pic = '/app/'.$key;
        }
        if ($request->file('category_pic')) {

            $filePath = $request->file('category_pic');
            $entension = $filePath->getClientOriginalExtension();
            $key = 'product/' . $request->name . '_category.'.$entension;

            Storage::delete(str_replace("/app/","",$product['category_pic']));
            Storage::put($key,file_get_contents($request->file('category_pic')->getRealPath()));
            $product->category_pic = '/app/'.$key;
        }

        $product->save();

        return back();
    }

    public function destroy(Product $product)
    {
        if ($product['main_pic']){
            Storage::delete(str_replace("/app/","",$product['main_pic']));
        }
        if ($product['category_pic']){
            Storage::delete(str_replace("/app/","",$product['category_pic']));
        }

        $product->delete();
        return redirect('/home');
    }

    public function image_upload($id)
    {
        if(\Request::file('file')){
            if (\Request::file('file')->isValid()){
                $destinationPath='./app/products/'.$id.'/';
                $filename=uniqid().'.'.\Request::file('file')
                        ->guessClientExtension();
                \Request::file('file')->move($destinationPath,$filename);

                echo substr($destinationPath.$filename, 1);
            }else{
                echo '错误，请重试!';
            }
        }
    }

    public function image_delete(Request $request)
    {
        Storage::delete($request['file_name']);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Category;
use Storage;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('admin.categories',compact('categories'));
    }

    public function create()
    {
        return view('admin.category_create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_pic' => 'image',
        ]);

        $category = New Category();
        $category->name = $request['name'];
        $category->sort = $request['sort'];
        $category->category_des = $request['category_des'];
        $category->title = $request['title'];
        $category->description = $request['description'];

        if ($request->file('category_pic'))
        {
            $filePath = $request->file('category_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '.'.$extension;
            Storage::put($key,file_get_contents($request->file('category_pic')->getRealPath()));
            $category->category_pic = '/app/'.$key;
        }

        $category->save();

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.category_edit',compact('category'));
    }

    public function update(Request $request,Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_pic' => 'image',
        ]);

        $category->name = $request['name'];
        $category->sort = $request['sort'];
        $category->category_des = $request['category_des'];
        $category->title = $request['title'];
        $category->description = $request['description'];

        if ($request->file('category_pic'))
        {
            $filePath = $request->file('category_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '.'.$extension;
            Storage::put($key,file_get_contents($request->file('category_pic')->getRealPath()));
            $category->category_pic = '/app/'.$key;
        }
        $category->save();
        return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        if ($category['category_pic']){
            Storage::delete(str_replace("/app/","",$category['category_pic']));
        }

        $category->delete();
        return redirect('/admin/categories');
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\Page;
use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = Page::orderBy('tag','asc')->orderBy('sort','asc')->orderBy('updated_at', 'desc')->select('id','name','sort','tag','updated_at')->paginate(20);
        return view('admin.pages',compact('pages'));
    }

    public function create()
    {
        return view('admin.page_create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'main_pic' => 'image',
        ]);

        $page = New Page();

        $page->name = $request['name'];
        $page->sort = $request['sort'];
        $page->tag = $request['tag'];
        $page->title = $request['title'];
        $page->description = $request['description'];
        $page->content = $request['content'];

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'page/' . $request->name . '.'.$extension;

            Storage::put($key,file_get_contents($request->file('main_pic')->getRealPath()));

            $page->main_pic = '/app/'.$key;
        }

        $page->save();

        return redirect('/admin/pages');
    }

    public function edit(Page $page)
    {
        $files = Storage::files('pages/'.$page->id);

        return view('admin.page_edit',compact('page','files'));
    }

    public function update(Request $request,Page $page)
    {
        $this->validate($request, [
            'name' => 'required',
            'main_pic' => 'image',
        ]);

        $page->name = $request['name'];
        $page->sort = $request['sort'];
        $page->title = $request['title'];
        $page->description = $request['description'];
        $page->content = $request['content'];

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'page/' . $request->name . '.'.$extension;

            Storage::delete(str_replace("/app/","",$page['main_pic']));
            Storage::put($key,file_get_contents($request->file('main_pic')->getRealPath()));
            $page->main_pic = '/app/'.$key;
        }

        $page->save();

        return back();
    }

    public function destroy(Page $page)
    {
        if ($page['main_pic']){
            Storage::delete(str_replace("/app/","",$page['main_pic']));
        }

        Storage::deleteDirectory('pages/'.$page->id);

        $page->delete();
        return redirect('/admin/pages');
    }

    public function image_upload($id)
    {
        if(\Request::file('file')){
            if (\Request::file('file')->isValid()){
                $destinationPath='./app/pages/'.$id.'/';
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

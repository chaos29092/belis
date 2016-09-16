<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Storage;

class ImageController extends Controller
{

    public function view($image)
    {
        $path = storage_path() . '/uploads/' . $image;

        if (File::exists($path))
        {
            $filetype = File::type($path);
            $response = Response::make(File::get($path), 200);
            $response->header('Content-Type', $filetype);

            return $response;
        }

        return false;
    }

    public function store(Request $request)
    {
        $extension = $request->file('file')->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $extension;
//        $destination = storage_path() . '/uploads';

//        $request->file('file')->move($destination, $fileName);
        Storage::put('upload/1.jpg',file_get_contents($request->file('file')));

        return url(url('api/image/' . $fileName));
    }
}
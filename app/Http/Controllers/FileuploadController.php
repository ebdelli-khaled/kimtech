<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Auth;
class FileuploadController extends Controller
{

    public function index()
    {
      return View('file.index');
    }
    public function show(Request $request)
    {
      $file = $request->file('image');
      $name = $file->getClientOriginalName();
      $size = $file->getSize();
      $extension = $file->getClientOriginalExtension();
      $destinationPath = 'uploads';
      $image_name = Auth::user()->id;
      $file->move('uploads', $image_name);
      $image = Image::make(sprintf('uploads/%s', $image_name))->resize(200, 200)->save();
      return View('file.file' , array('name' =>$name ,'named' =>$image_name ,'size' =>$size, 'extension' =>$extension ));
    }
}

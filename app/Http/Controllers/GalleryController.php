<?php

namespace App\Http\Controllers;

use Illuminate\Http\Concerns\InteractsWithInput;
//use \Input as Input;

use Illuminate\Http\Request;
use App\Photo;
use App\Category;
class GalleryController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('gallery',[
            'photos' => Photo::all_photos(),
            'category' => Category::all_category()
        ]);
    }

    public function create(){

        return view('gallery.create',[ 'categories' => Category::all_category()]);

    }

    public function destroy($id){

        Photo::find($id)->delete();
        return redirect()->route('gallery');

    }


    public function upload(Request $request)
    {

        $photo = new Photo;
        foreach ($request->file() as $file) {
                $file_name = time().'_'.$file->getClientOriginalName();
                $file->move(storage_path('../public/img/content'), $file_name);
                $photo->path = $file_name;
        }
        $photo->category_id = $request->get('category_id');
        $photo->save();

        return redirect()->route('gallery');
    }
}

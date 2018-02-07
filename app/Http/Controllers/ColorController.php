<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Color;
Use App\Category;
class ColorController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('color',[
            'colors' => Color::all_colors(),
            'category' => Category::all_category()
        ]);
    }

    public function create(){

        return view('color.create',[ 'categories' => Category::all_category()]);

    }

    public function edit(Request $request){

        $id = $request->input('id');
        $color = Color::find($id);
        return view('color.edit',[
                'categories' => Category::all_category(),
                'color' =>   $color
        ]);

    }

    public function update(Request $request, $id){

        $color = Color::find($id);

        $color->category_id = $request->get('category_id');
        $color->name = $request->get('name');
        $color->code = $request->get('code');

        $color->save();

        return redirect()->route('color');
    }

    public function destroy($id){

        Color::find($id)->delete();
        return redirect()->route('color');

    }

    public function upload(Request $request)
    {

        $color = new Color;
        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/color'), $file_name);
            $color->img = $file_name;
        }
        $color->category_id = $request->get('category_id');
        $color->name = $request->get('name');
        $color->code = $request->get('code');
        $color->save();

        return redirect()->route('color');
    }
}

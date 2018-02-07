<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Color;
use App\Photo;
use App\Main;
use App\Sale;
use App\Price;

class CategoryController extends Controller
{
    public function index(Request $request){

        $id = $request->input('id'); // получили get запрос
        if($id == null){
            return redirect()->route('index');
        }

        return view('category',['category' => Category::get_category_data($id),
            'colors' => Color::get_category_color($id),
            'photos' => Photo::get_category_photo($id),
            'main' => Main::get_main(),
            'sales' => Sale::all_sales(),
            'all_table' => Price::get_table_price(),
            'category_id' => $id
        ]);
    }
}

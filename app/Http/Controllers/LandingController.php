<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Review;
use App\Photo;
use App\Main;
class LandingController extends Controller
{
    public function index(){
        return view('index',['categories' => Category::all_category(),
                            'reviews' => Review::all_review(),
                            'photos' => Photo::all_photos(),
                            'main' => Main::get_main()
        ]);
    }
}

<?php

namespace App;
use App\Main;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $fillable = ['name','avatar','url','page_title','price'];

    public static function all_category(){

        $categories = Category::orderBy('id','asc')->get();
        $res = array();
        if ($categories) {
            foreach ($categories as $key => $category) {
                $res[$key]['id'] = $category->id;
                $res[$key]['name'] = $category->name;
                $res[$key]['avatar'] = $category->avatar;
                $res[$key]['url'] = $category->url;
                $res[$key]['page_title'] = $category->page_title;
                $res[$key]['price'] = $category->price;
            }
        }
        return $res;
    }

    public static function get_category_data($id){

        $category = Category::find($id);
        return $category;

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['category_id','name','code','img'];

    public static function all_colors(){

        $result= Color::orderBy('id','asc')->get();
        $res = array();
        if ($result) {
            foreach ($result as $key => $color) {
                $res[$key]['id'] = $color->id;
                $res[$key]['category_id'] = $color->category_id;
                $res[$key]['name'] = $color->name;
                $res[$key]['code'] = $color->code;
                $res[$key]['img'] = $color->img;
            }
        }
        return $res;
    }

    public static function get_category_color($id){

        $result = Color::where('category_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        return $result;

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path','category_id'];

    public static function all_photos(){

        $photos = Photo::orderBy('id','asc')->get();
        $res = array();
        if ($photos) {
            foreach ($photos as $key => $photo) {
                $res[$key]['id'] = $photo->id;
                $res[$key]['path'] = $photo->path;
                $res[$key]['category_id'] = $photo->category_id;
            }
        }
        return $res;
    }

    public static function get_category_photo($id){

        $result = Photo::where('category_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        return $result;

    }
}

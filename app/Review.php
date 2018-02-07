<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = ['name','social_icon','position','text','avatar'];

    public static function all_review(){

        $reviews = Review::orderBy('id','asc')->get();
        $res = array();
        if ($reviews) {
            foreach ($reviews as $key => $review) {
                $res[$key]['id'] = $review->id;
                $res[$key]['name'] = $review->name;
                $res[$key]['social_icon'] = $review->social_icon;
                $res[$key]['position'] = $review->position;
                $res[$key]['text'] = $review->text;
                $res[$key]['avatar'] = $review->avatar;
            }
        }
        return $res;
    }
}

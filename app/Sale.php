<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['category_id','title','description','img','date','where'];

    public static function all_sales(){

        $result= Sale::orderBy('id','asc')->get();
        $res = array();
        if ($result) {
            foreach ($result as $key => $sale) {
                $res[$key]['id'] = $sale->id;
                $res[$key]['category_id'] = $sale->category_id;
                $res[$key]['title'] = $sale->title;
                $res[$key]['description'] = $sale->description;
                $res[$key]['img'] = $sale->img;
                $res[$key]['date'] = $sale->date;
                $res[$key]['where'] = $sale->where;
            }
        }
        return $res;
    }

    public static function get_category_sale($id){

        $result = Sale::where('category_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        return $result;

    }
}

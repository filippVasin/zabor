<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    protected $fillable = ['table_name','table_number','column_name','price_one','price_two','price_three'];

    public static function all_prices(){

        $result = Price::orderBy('id','asc')->get();
        $res = array();
        if ($result) {
            foreach ($result as $key => $price) {
                $res[$key]['id'] = $price->id;
                $res[$key]['table_name'] = $price->table_name;
                $res[$key]['table_number'] = $price->table_number;
                $res[$key]['column_name'] = $price->column_name;
                $res[$key]['price_one'] = $price->price_one;
                $res[$key]['price_two'] = $price->price_two;
                $res[$key]['price_three'] = $price->price_three;
            }
        }
        return $res;
    }


    public static function get_table_price(){

        $all_table = array();

        for($i = 1; $i <= 7; $i++) {
            $result = Price::where('table_number', $i)
                ->orderBy('id', 'asc')
                ->get();
            $all_table[$i] = $result;
        }

        return $all_table;

    }
}

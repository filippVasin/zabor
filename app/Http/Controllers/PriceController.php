<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
class PriceController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('price',[
            'prices' => Price::all_prices(),
        ]);
    }

    public function edit(Request $request){

        $id = $request->input('id');
        $price = Price::find($id);
        return view('price.edit',[
            'price' => $price
        ]);

    }

    public function update(Request $request, $id){

        $price = Price::find($id);

        $price->column_name = $request->get('column_name');
        $price->price_one = $request->get('price_one');
        $price->price_two = $request->get('price_two');
        $price->price_three = $request->get('price_three');

        $price->save();

        return redirect()->route('price');
    }
}

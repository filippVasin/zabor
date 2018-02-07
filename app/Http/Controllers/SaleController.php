<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Use App\Category;
Use App\Sale;
class SaleController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('sale',[
            'sales' => Sale::all_sales(),
//            'category' => Category::all_category()
        ]);
    }

    public function create(){

        return view('sale.create',[
//            'categories' => Category::all_category()
        ]);


    }

    public function edit(Request $request){

        $id = $request->input('id');
        $sale = Sale::find($id);
        return view('sale.edit',[
//            'categories' => Category::all_category(),
            'sale' =>   $sale
        ]);

    }

    public function update(Request $request, $id){

        $sale = Sale::find($id);

//        $sale->category_id = $request->get('category_id');
        $sale->title = $request->get('title');
        $sale->description = $request->get('description');
        $sale->date = $request->get('date');
        $sale->where = $request->get('where');


        $sale->save();

        return redirect()->route('sale');
    }

    public function destroy($id){

        Sale::find($id)->delete();
        return redirect()->route('sale');

    }

    public function upload(Request $request)
    {

        $sale = new Sale;
        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/sale'), $file_name);
            $sale->img = $file_name;
        }

        $sale->category_id = 1;
        $sale->title = $request->get('title');
        $sale->description = $request->get('description');
        $sale->date = $request->get('date');
        $sale->where = $request->get('where');

        $sale->save();

        return redirect()->route('sale');
    }
}

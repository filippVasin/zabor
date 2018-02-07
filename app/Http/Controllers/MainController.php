<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
class MainController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('main',[
            'main' => Main::find(1)
        ]);
    }

    public function edit(){

        $main = Main::find(1);
        return view('main.edit',[
            'main' =>   $main
        ]);

    }

    public function update(Request $request){

        $main = Main::find(1);

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/main'), $file_name);
            $main->banner = $file_name;
        }
        $main->company_phone = $request->get('company_phone');
        $main->company_email = $request->get('company_email');
        $main->leads_email = $request->get('leads_email');
        $main->offer = $request->get('offer');
        $main->video = substr($request->get('video'), -11); ;
        $main->video_title = $request->get('video_title');

        $main->save();

        return redirect()->route('main');
    }

}

<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use App\Lead;
use App\Http\Requests\createLeadRequest;
use App\Main;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    use ValidatesRequests;

    /**
     * @param createLeadRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(createLeadRequest $request)
    {
        $lead = new Lead();
        $lead->phone = $request->get('phone');
        $lead->name = $request->get('name');

//        $main = Main::find(1);
//        if($main->leads_email != ""){
//
//            $email = $main->leads_email;
//            $name = $lead->name;
//            $phone = $lead->phone;
//
//            Mail::to($email)->send(new MailClass($name, $phone));
//        }


        $lead->save();

        return redirect()->route('index');
    }

    public function create2(createLeadRequest $request)
    {
        $lead = new Lead();
        $lead->phone = $request->get('phone2');
        $lead->name = $request->get('name2');

//        $main = Main::find(1);
//        if($main->leads_email != ""){
//
//            $email = $main->leads_email;
//            $name = $lead->name;
//            $phone = $lead->phone;
//
//            Mail::to($email)->send(new MailClass($name, $phone));
//        }


        $lead->save();

        return redirect()->route('index');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable = ['company_phone','company_email','leads_email','offer','banner','video','video_title'];

    public static function get_main(){

        $array = Main::orderBy('id','asc')->get();
        $res = array();
        if ($array) {
            foreach ($array as $key => $main) {
                $res['company_phone'] = $main->company_phone;
                $res['company_email'] = $main->company_email;
                $res['leads_email'] = $main->leads_email;
                $res['offer'] =  htmlspecialchars($main->offer);
                $res['banner'] = $main->banner;
                $res['video'] = $main->video;
                $res['video_title'] = $main->video_title;
            }
        }
        return $res;
    }
}

<?php

use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('mains')->insert([
            'company_phone' => '3-806-805',
            'company_email' => 'artzabor54@yandex.ru',
            'leads_email' => 'artzabor54@yandex.ru',
            'offer' => '
                spanyellow Скид­ка 30% nospan
                sspan На монтаж при заказе до 01.04.2018г nospan
                sspan Хра­нение материалов до монтажа - spanyellow бесплатно! nospan nospan
            ',
            'banner' => 'img_home .jpg',
            'video' => 'ZqTrjkCYC1w',
            'video_title' => 'Забор из ребца (любой текст)',

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Заборы из Профнастила',
            'avatar' => '1.png',
            'url' => 'profiled-sheets',
            'page_title' => 'Заборы из Профильного листа',
            'price' => 1300
            ]);
        DB::table('categories')->insert([
            'name' => 'Заборы из Евроштакетника',
            'avatar' => '2.png',
            'url' => 'euro-fences',
            'page_title' => 'Заборы из Профильного листа',
            'price' => 1500
        ]);
        DB::table('categories')->insert([
            'name' => 'Заборы типа «Гардис»',
            'avatar' => '3.png',
            'url' => 'gardis',
            'page_title' => 'Заборы из Профильного листа',
            'price' => 1300
        ]);
        DB::table('categories')->insert([
            'name' => 'Заборы из сетки рабицы',
            'avatar' => '4.png',
            'url' => 'net-child',
            'page_title' => 'Заборы из Профильного листа',
            'price' => 850
        ]);
        DB::table('categories')->insert([
            'name' => 'Заборы Деревянные',
            'avatar' => '5.png',
            'url' => 'wooden',
            'page_title' => 'Заборы из Профильного листа',
            'price' => 1250
        ]);
        DB::table('categories')->insert([
            'name' => 'Ворота и Калитки',
            'avatar' => '6.png',
            'url' => 'gates-and-wickets',
            'page_title' => 'Заборы из Профильного листа',
            'price' => 0
        ]);

    }
}

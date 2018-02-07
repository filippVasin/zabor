<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'category_id' => random_int(1,6),
            'title' => 'в подарок Калитка',
            'description' => 'При заказе забора',
            'img' => 'action1.png',
            'date' => '2018.06.12',
            'where' => 'от 100 м.п',
        ]);
        DB::table('sales')->insert([
            'category_id' => random_int(1,6),
            'title' => 'СКИДКА 20% на монтаж',
            'description' => 'При заказе забора',
            'img' => 'action2.png',
            'date' => '2018.01.01',
            'where' => 'от 100 м.п',
        ]);
        DB::table('sales')->insert([
            'category_id' => random_int(1,6),
            'title' => 'Под ключ 18 000 руб!',
            'description' => 'При заказе ворот и калитки из профильного листа',
            'img' => '',
            'date' => '2018.05.09',
            'where' => 'от 100 м.п',
        ]);
        DB::table('sales')->insert([
            'category_id' => random_int(1,6),
            'title' => 'окраска каркаса БЕСПЛАТНО',
            'description' => 'При заказе забора',
            'img' => '',
            'date' => '2018.10.12',
            'where' => 'от 100 м.п',
        ]);
    }
}

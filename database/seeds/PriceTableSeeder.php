<?php

use Illuminate\Database\Seeder;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'table_name' => 'Заборы из профильного листа',
            'table_number' => 1,
            'column_name' => 'Оцинкованный лист',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);
        DB::table('prices')->insert([
            'table_name' => 'Заборы из профильного листа',
            'table_number' => 1,
            'column_name' => 'Полимерное покрытие с одной стороны',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);
        DB::table('prices')->insert([
            'table_name' => 'Заборы из профильного листа',
            'table_number' => 1,
            'column_name' => 'Полимерное покрытие с двух сторон',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);
        DB::table('prices')->insert([
            'table_name' => 'Заборы из профильного листа',
            'table_number' => 1,
            'column_name' => 'Покрытие под дерево/камень',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Заборы из Евроштакетника',
            'table_number' => 2,
            'column_name' => 'Одностароннее окрашиванние',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);


        DB::table('prices')->insert([
            'table_name' => 'Заборы 3D(Материалы + Монтаж)',
            'table_number' => 3,
            'column_name' => 'Optima 3D - 5mm',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Заборы 3D(Материалы + Монтаж)',
            'table_number' => 3,
            'column_name' => 'Fit 3D - 3.7mm',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Заборы 3D(Материалы + Монтаж) с нашими столбами(60х40х2мм по 3 метра)',
            'table_number' => 4,
            'column_name' => 'Optima 3D - 5mm',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Заборы 3D(Материалы + Монтаж) с нашими столбами(60х40х2мм по 3 метра)',
            'table_number' => 4,
            'column_name' => 'Fit 3D - 3.7mm',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1200',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Сетка рабица в натяжку по столбам с протяжкой по верху',
            'table_number' => 5,
            'column_name' => 'Чёрная',
            'price_one' => '1300',
            'price_two' => '1400',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Сетка рабица в натяжку по столбам с протяжкой по верху',
            'table_number' => 5,
            'column_name' => 'Оцинкованная',
            'price_one' => '1300',
            'price_two' => '1400',

        ]);

        DB::table('prices')->insert([
            'table_name' => 'Сетка рабица в рамках',
            'table_number' => 6,
            'column_name' => 'Оцинкованная',
            'price_one' => '1300',
            'price_two' => '1400',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Сетка рабица в рамках',
            'table_number' => 6,
            'column_name' => 'зелёная',
            'price_one' => '1300',
            'price_two' => '1400',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Стоимость забора под ключь(Вертикально расположенные доски)',
            'table_number' => 7,
            'column_name' => 'Обрезанная доска',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1400',
        ]);

        DB::table('prices')->insert([
            'table_name' => 'Стоимость забора под ключь(Вертикально расположенные доски)',
            'table_number' => 7,
            'column_name' => 'Строганная доска',
            'price_one' => '1300',
            'price_two' => '1400',
            'price_three' => '1400',
        ]);

    }
}

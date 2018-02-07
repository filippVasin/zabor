<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'path' => '1.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '2.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '12.png',
            'category_id' => random_int(1,6),
        ]);

        DB::table('photos')->insert([
            'path' => '3.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '4.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '5.png',
            'category_id' => random_int(1,6),
        ]);

        DB::table('photos')->insert([
            'path' => '6.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '7.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '8.png',
            'category_id' => random_int(1,6),
        ]);

        DB::table('photos')->insert([
            'path' => '9.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '10.png',
            'category_id' => random_int(1,6),
        ]);
        DB::table('photos')->insert([
            'path' => '11.png',
            'category_id' => random_int(1,6),
        ]);
    }
}

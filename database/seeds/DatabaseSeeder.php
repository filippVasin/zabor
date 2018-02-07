<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(MainTableSeeder::class);

        $this->call(ColorTableSeeder::class);
        $this->call(PriceTableSeeder::class);
        $this->call(SalesTableSeeder::class);

    }
}

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
           ['name' => 'Bó hoa tươi', 'img' => ''],
            ['name' => 'Giỏ hoa tươi', 'img' => ''],
            ['name' => 'Hoa chúc mừng', 'img' => ''],
            ['name' => 'Hoa chia buồn', 'img' => ''],
        ]);
    }
}

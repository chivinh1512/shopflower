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
           ['name' => 'Bó hoa tươi', 'img' => 'Anh-bia-bo-hoa-tuoi-400x400.jpg'],
            ['name' => 'Giỏ hoa tươi', 'img' => 'Anh-bia-gio-hoa-tuoi-533x400.jpg'],
            ['name' => 'Hoa chúc mừng', 'img' => 'Anh-bia-hoa-chuc-mung-284x400.jpg'],
            ['name' => 'Hoa chia buồn', 'img' => 'Anh-bia-hoa-chia-buon-e1546829205889-282x400.jpg'],
        ]);
    }
}

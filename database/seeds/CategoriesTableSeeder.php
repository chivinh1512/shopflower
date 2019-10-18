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
           ['name' => 'Bó hoa tươi', 'img' => 'bohoatuoi.jpg'],
            ['name' => 'Giỏ hoa tươi', 'img' => 'giohoatuoi.jpg'],
            ['name' => 'Hoa chúc mừng', 'img' => 'hoachucmung.jpg'],
            ['name' => 'Hoa chia buồn', 'img' => 'hoachiabuon.jpg'],
        ]);
    }
}

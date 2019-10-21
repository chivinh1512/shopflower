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
           ['name' => 'Bó hoa tươi', 'img' => 'bohoatuoi.png'],
            ['name' => 'Giỏ hoa tươi', 'img' => 'giohoatuoi.png'],
            ['name' => 'Hoa chúc mừng', 'img' => 'hoachucmung.png'],
            ['name' => 'Hoa chia buồn', 'img' => 'hoachiabuon.png'],
        ]);
    }
}

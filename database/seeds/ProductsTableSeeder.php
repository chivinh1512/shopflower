<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Trao yêu thương A01', 'img' => 'aa', 'price' => '50000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A02', 'img' => 'aa', 'price' => '50000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A03', 'img' => 'aa', 'price' => '50000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A04', 'img' => 'aa', 'price' => '50000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A04', 'img' => 'aa', 'price' => '50000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Ngày nắng B01', 'img' => 'aa', 'price' => '55000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B02', 'img' => 'aa', 'price' => '55000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B03', 'img' => 'aa', 'price' => '55000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B04', 'img' => 'aa', 'price' => '55000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B05', 'img' => 'aa', 'price' => '60000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Khai trương lộc phát', 'img' => 'aa', 'price' => '45000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát', 'img' => 'aa', 'price' => '40000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát', 'img' => 'aa', 'price' => '35000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát', 'img' => 'aa', 'price' => '45000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát', 'img' => 'aa', 'price' => '55000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Thành kính phân ưu', 'img' => 'aa', 'price' => '60000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu', 'img' => 'aa', 'price' => '50000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu', 'img' => 'aa', 'price' => '45000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu', 'img' => 'aa', 'price' => '35000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu', 'img' => 'aa', 'price' => '40000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
        ]);
    }
}

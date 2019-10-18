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
            ['name' => 'Trao yêu thương A01', 'img' => 'bo-hoa-tuoi-happy-flower-E04-1-247x296.jpg', 'price' => '50000', 'id_cate' => '1', 'detail' => 'Tình yêu đến khẽ như một cơn gió sớm mai với những tia nắng ngọt ngào và ấm áp. Ai đó đã từng nói rằng thật tội nghiệp cho những kẻ chưa từng được yêu. Khi thì nồng nàn và khi thì sâu lắng tạo nên những dư vị tuyệt vời của tình yêu.' ],
            ['name' => 'Trao yêu thương A02', 'img' => 'bo-hoa-tuoi-happy-e01-247x296.jpg', 'price' => '40000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A03', 'img' => 'bo-hoa-tuoi-happy-flower-E16-1-247x296.jpg', 'price' => '25000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A04', 'img' => 'bo-hoa-tuoi-happy-flower-E12-247x296.jpg', 'price' => '30000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A05', 'img' => 'bo-hoa-tuoi-happy-flower-E03-247x296.jpg', 'price' => '45000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Trao yêu thương A06', 'img' => 'bo-hoa-tuoi-happy-flower-E02-247x296.jpg', 'price' => '60000', 'id_cate' => '1', 'detail' => '10 hoa hồng' ],
            ['name' => 'Ngày nắng B01', 'img' => 'ed61bae021bdc4e39dac-247x296.jpg', 'price' => '65000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B02', 'img' => 'giohoatuoi.jpg', 'price' => '35000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B03', 'img' => 'giohoatuoi11.jpg', 'price' => '45000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B04', 'img' => 'Gio-hoa-tuoi-happy-flower-D03-1-247x296.jpg', 'price' => '40000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B05', 'img' => 'gio-hoa-tuoi-happy-flower-D05-247x296.jpg', 'price' => '60000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Ngày nắng B06', 'img' => 'gio-hoa-tuoi-happy-flower-D44-247x296.jpg', 'price' => '60000', 'id_cate' => '2', 'detail' => '15 hoa hồng' ],
            ['name' => 'Khai trương lộc phát C01', 'img' => 'hoachucmung.jpg', 'price' => '45000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát C02', 'img' => 'hoachucmung2.jpg', 'price' => '40000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát C03', 'img' => 'hoachucmung3.jpg', 'price' => '35000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát C04', 'img' => 'hoachucmung4.jpg', 'price' => '45000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Khai trương lộc phát C05', 'img' => 'hoachucmung5.jpg', 'price' => '55000', 'id_cate' => '3', 'detail' => '20 hoa hồng' ],
            ['name' => 'Thành kính phân ưu D01', 'img' => 'Hoachiabuon.jpg', 'price' => '60000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu D02', 'img' => 'Hoachiabuon2.jpg', 'price' => '50000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu D03', 'img' => 'Hoachiabuon3.jpg', 'price' => '45000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu D04', 'img' => 'Hoachiabuon4.jpg', 'price' => '35000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
            ['name' => 'Thành kính phân ưu D05', 'img' => 'Hoachiabuon5.jpg', 'price' => '40000', 'id_cate' => '4', 'detail' => 'Vòng hoa chia buồn' ],
        ]);
    }
}

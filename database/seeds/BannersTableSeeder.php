<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            ['img' => 'giao-hoa-toan-quoc-ngay-quoc-te-phu-nu-banner.jpg','created_at'=>'2019-10-13 19:01:47'],
            ['img' => 'gio-hoa-tuoi-banner.jpg','created_at'=>'2019-10-13 15:02:42'],
        ]);
    }
}

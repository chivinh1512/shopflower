<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'vinhadmin', 'level' => '1', 'facebook_id' => '910332716006384' ],
        ]);
    }
}

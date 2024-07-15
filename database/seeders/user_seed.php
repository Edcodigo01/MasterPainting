<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'=>'Master Painting',
            // 'email'=>'eskadental@gmail.com',
            'password'=>bcrypt('1234')
        ]);

        DB::table('categories')->insert([
            'name'=>'Interior Paint',
            'slug'=>'interior-paint',
        ]);

        DB::table('categories')->insert([
            'name'=>'Exterior Paint',
            'slug'=>'exterior-paint',
        ]);

        DB::table('categories')->insert([
            'name'=>'Pressure Washer',
            'slug'=>'pressure-washer',
        ]);


    }
}

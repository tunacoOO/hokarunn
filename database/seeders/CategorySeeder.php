<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => '',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => '和食',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => '中華',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'フレンチ',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'イタリアン',
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'ブッフェ',
        ]);
           
            
        
    }
}

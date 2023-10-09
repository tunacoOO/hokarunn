<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_categories')->insert([
            'id' => 1,
            'name' => '',
        ]);
        DB::table('time_categories')->insert([
            'id' => 2,
            'name' => '朝食',
        ]);
        DB::table('time_categories')->insert([
            'id' => 3,
            'name' => '昼食',
        ]);
        DB::table('time_categories')->insert([
            'id' => 4,
            'name' => '夕食',
        ]);
        DB::table('time_categories')->insert([
            'id' => 5,
            'name' => 'アフタヌーンティー',
        ]);
        DB::table('time_categories')->insert([
            'id' => 6,
            'name' => 'ルームサービス',
        ]);
           
            
        
    }
}
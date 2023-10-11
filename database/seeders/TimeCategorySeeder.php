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
            'name' => '朝食',
        ]);
        DB::table('time_categories')->insert([
            'name' => '昼食',
        ]);
        DB::table('time_categories')->insert([
            'name' => '夕食',
        ]);
        DB::table('time_categories')->insert([
            'name' => 'アフタヌーンティー',
        ]);
        DB::table('time_categories')->insert([
            'name' => 'ルームサービス',
        ]);
           
            
        
    }
}
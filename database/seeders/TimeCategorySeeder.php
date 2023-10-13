<?php

namespace Database\Seeders;

use App\Models\TimeCategory;
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
            'timecode' =>'breakfast'
        ]);
        DB::table('time_categories')->insert([
            'name' => '昼食',
            'timecode' => 'lunch'
        ]);
        DB::table('time_categories')->insert([
            'name' => '夕食',
            'timecode' => 'dinner'
        ]);
        DB::table('time_categories')->insert([
            'name' => 'アフタヌーンティー',
            'timecode' => 'afternoontea'
        ]);
        DB::table('time_categories')->insert([
            'name' => 'ルームサービス',
            'timecode' => 'roomservice'
        ]);
           
            
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
                'name' => '命名の心得',
                'data' => 'データに合わせる',
                'event_id'=>1,
                'category_id' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

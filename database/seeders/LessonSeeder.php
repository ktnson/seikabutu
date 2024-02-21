<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
                'name' => '専攻・必修',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('lessons')->insert([
                'name' => '兼修',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('lessons')->insert([
                'name' => 'その他',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

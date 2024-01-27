<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
                'name' => '命名の心得',
                'taskcount' => '命名はデータを基準に考える',
                'percentage' => '命名はデータを基準に考える',
                'day' => '命名はデータを基準に考える',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

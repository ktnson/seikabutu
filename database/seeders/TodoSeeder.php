<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
                'name' => 'やることの内容',
                'time' => 'どれくらい時間をかけるか・いつまでにするか',
                'event_id'=>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

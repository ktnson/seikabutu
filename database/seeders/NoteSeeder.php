<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
                'name' => 'ノート題名',
                'content'=>'ノート内容',
                'file_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

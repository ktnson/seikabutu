<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dictionaries')->insert([
                'dictionary_name' => '命名の心得',
                'url' => '命名はデータを基準に考える',
                'language_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

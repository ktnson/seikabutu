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
                'dictionary_name' => '辞書名',
                'url' => '辞書のURL',
                'language_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

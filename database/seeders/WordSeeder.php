<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
                'name' => '動詞(verb)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => '名詞(noun)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => '形容詞(adjective)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => '副詞(adverb)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => '助動詞(auxiliary verb)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => '接続詞(conjunction)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => '前置詞(preposition)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('words')->insert([
                'name' => 'その他(others)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

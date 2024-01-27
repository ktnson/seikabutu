<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wordlists', function (Blueprint $table) {
             $table->foreignId('word_id')->constrained();   
        //'word_id' は 'wordsテーブル' の 'id' を参照する外部キーです
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wordlists', function (Blueprint $table) {
            //
        });
    }
};

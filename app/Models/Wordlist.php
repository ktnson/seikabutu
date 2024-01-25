<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wordlist extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'wordlist_name',
    'word',
    'word_id',
];

// Wordに対するリレーション

//「1対多」の関係なので単数系に
public function word()
{
    return $this->belongsTo(Word::class);
}

}



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
    'name',
    'word_id',
];

// Wordに対するリレーション


public function getByCategory(int $limit_count = 5)
    {
         return $this->wordlists()->with('word')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

//「1対多」の関係なので単数系に
public function word()
{
    return $this->belongsTo(Word::class);
}

}
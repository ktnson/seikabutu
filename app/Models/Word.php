<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Word extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
];

// wordlistに対するリレーション

//「1対多」の関係なので'wordlists'と複数形に
public function wordlists()   
{
    return $this->hasMany(Wordlist::class);  
}
}

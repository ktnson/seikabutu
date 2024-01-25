<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dictionary extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'dictionary_name',
    'url',
    'language_id',
];

// Languageに対するリレーション

//「1対多」の関係なので単数系に
public function language()
{
    return $this->belongsTo(Language::class);
}

}

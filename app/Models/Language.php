<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
];

// dicitonaryに対するリレーション

//「1対多」の関係なので'dictionaries'と複数形に
public function dictionaries()   
{
    return $this->hasMany(Dictionary::class);  
}
}

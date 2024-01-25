<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'category_name',
];

// scoreに対するリレーション

//「1対多」の関係なので'scores'と複数形に
public function scores()   
{
    return $this->hasMany(Score::class);  
}
}

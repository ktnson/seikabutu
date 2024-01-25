<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Score extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'category_id',
];
// categoryに対するリレーション

//「1対多」の関係なので単数系に
public function category()
{
    return $this->belongsTo(Category::class);
}

// eventに対するリレーション

//「1対多」の関係なので'events'と複数形に
public function events()   
{
    return $this->hasMany(Event::class);  
}
}

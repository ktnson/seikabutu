<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'time',
];

// eventに対するリレーション

//「1対多」の関係なので'events'と複数形に
public function events()   
{
    return $this->hasMany(Event::class);  
}
}

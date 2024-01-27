<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'lesson_id',
    'user_id',
];

// lessonに対するリレーション

//「1対多」の関係なので単数系に
public function lesson()
{
    return $this->belongsTo(Lesson::class);
}
}

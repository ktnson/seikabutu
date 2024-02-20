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

function getPaginateByLimit(int $limit_count = 5)
{
    return $this->files()->with('lesson')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
public function lesson()
{
    return $this->belongsTo(Lesson::class);
}

public function notes()
{
    return $this->hasMany(Note::class, 'file_id');
}

}

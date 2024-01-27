<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'taskcount',
    'percentage',
    'day',
    'user_id',
    'todo_id',
    'score_id',
];

// userに対するリレーション

//「1対多」の関係なので単数系に
public function user()
{
    return $this->belongsTo(User::class);
}

// todoに対するリレーション

//「1対多」の関係なので単数系に
public function todo()
{
    return $this->belongsTo(Todo::class);
}

// scoreに対するリレーション

//「1対多」の関係なので単数系に
public function score()
{
    return $this->belongsTo(Score::class);
}
}

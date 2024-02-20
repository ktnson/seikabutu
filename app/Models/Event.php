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
];

// userに対するリレーション

//「1対多」の関係なので単数系に
public function user()
{
    return $this->belongsTo(User::class);
}

// todoに対するリレーション

public function todos()
{
    return $this->hasMany(Todo::class, 'event_id');
}

// scoreに対するリレーション

//「1対多」の関係なので単数系に
public function scores()
{
    return $this->hasMany(Score::class, 'event_id');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'content',
    'file_id',
];

// Fileに対するリレーション

//「1対多」の関係なので単数系に
public function file()
{
    return $this->belongsTo(File::class);
}
}

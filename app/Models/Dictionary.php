<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Databese\Eloquent\SoftDeletes;

class Dictionary extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'dictionary_name',
    'url',
];
}

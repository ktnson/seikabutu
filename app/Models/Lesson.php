<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
];

// fileに対するリレーション

//「1対多」の関係なので'files'と複数形に
public function files()   
{
    return $this->hasMany(File::class);  
}

public function getByCategory(int $limit_count = 5)
    {
         return $this->files()->with('lesson')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}

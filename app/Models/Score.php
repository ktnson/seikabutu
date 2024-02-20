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
    'event_id',
    'category_id',
    'data',
];
// categoryに対するリレーション

//「1対多」の関係なので単数系に
public function getByCategory(int $limit_count = 5)
    {
         return $this->scores()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

//「1対多」の関係なので単数系に
public function category()
{
    return $this->belongsTo(Category::class);
}


// eventに対するリレーション

//「1対多」の関係なので'events'と複数形に
public function event()
{
    return $this->belongsTo(Event::class, 'event_id');
}
}

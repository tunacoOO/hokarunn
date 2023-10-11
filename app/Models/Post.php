<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
    'images',
    'body',
    'category_id',
    'time_category_id',
    'prefecture'
];

public function category()
{
    return $this->belongsTo(Category::class);
}

public function time_category()
{
    return $this->belongsTo(TimeCategory::class);
}

}



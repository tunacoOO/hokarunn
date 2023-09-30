<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable = [
        'pref_id', 'title', 'body', 'image',
    ];

    public function getPrefNameAttribute()
    {
        return config('pref.' . $this->pref_id);
    }

    public function scopeSearchFilter($query, string $search = null)
    {
        if (!$search) {
            return $query;
        }

        return $query->where('title', 'LIKE', "%{$search}%")
        ->orWhere('body', 'LIKE', "%{$search}%");
    }

    public function scopePrefFilter($query, string $pref = null)
    {
        if (!$pref) {
            return $query;
        }

        return $query->where('pref_id', $pref);
    }

}

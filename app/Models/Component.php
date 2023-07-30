<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    
    public function posts()
    {
        return $this->hasMany(Bookmark::class);
    }
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get(0);
    }
    
     public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}

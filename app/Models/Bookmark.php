<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    
    protected $table = 'bookmarks';
    protected $fillable = [
        'user_id',
        'component_id',
    ];
    
    public function component()
    {
        return $this->belongsTo(Component::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

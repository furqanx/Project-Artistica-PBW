<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'comment_content'
    ];

    public function posts() 
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }

    public function users() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

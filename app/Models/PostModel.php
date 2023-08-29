<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $table = 'posts';

    // The attributes that are mass assignable.
    protected $fillable = ['title', 'content', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

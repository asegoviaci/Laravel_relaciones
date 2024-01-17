<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tema extends Model
{
    protected $fillable = ['nombre'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}

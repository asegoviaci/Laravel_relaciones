<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Direccion;
use App\Models\Post;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','email','edad','fecha_nacimiento','genero','direccion_id',];

    public function direccion(){
        return $this->belongsTo(Direccion::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}

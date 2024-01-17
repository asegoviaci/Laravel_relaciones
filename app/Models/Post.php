<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Usuario;
use App\Models\Tema;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['codigo','titulo','usuario_id',];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function temas()
    {
        return $this->belongsToMany(Tema::class);
    }
}

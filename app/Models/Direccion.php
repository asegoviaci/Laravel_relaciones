<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Usuario;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones'; 
    protected $fillable=['calle','numero_portal','codigo_postal','ciudad','usuario_id',];

    public function usuarios(){
        return $this->hasOne(Usuario::class);
    }

}

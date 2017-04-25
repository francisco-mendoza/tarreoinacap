<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey  = "id_usuario";

    protected $fillable = [
        'id_usuario',
        'nombre',
        'apellido',
        'rut',
        'email',
        'carrera'
    ];

    public $timestamps = false;

    protected $table = 'usuarios';

    public static function getUsuarioByEmail($email){
        return Usuario::where('email','=',$email)->first();
    }
}

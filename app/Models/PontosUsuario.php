<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class PontosUsuario extends Authenticatable
{
    protected $table = 'pontos_usuario';
    protected $primaryKey = "id_pontos_usuario";
    // public $timestamps = false;

    public function hasUsuario(){
        return $this->hasOne('\App\Models\Usuario', 'idUsuarios', 'fk_idusuario');
    }

}

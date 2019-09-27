<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class RespondidasUsuario extends Authenticatable
{
    protected $table = 'respondidas_usuario';
    protected $primaryKey = "id_respondidas_usuario";
    public $timestamps = false;

    public function hasUsuario(){
        return $this->hasOne('\App\Models\Usuarios', 'idUsuarios', 'fk_idusuario');
    }

    public function hasPergunta(){
        return $this->hasOne('\App\Models\Pergunta', 'idPergunta', 'fk_idpergunta');
    }

}

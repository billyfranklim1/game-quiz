<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Score extends Authenticatable
{
    protected $table = 'score';
    protected $primaryKey = "idScore";
    public $timestamps = false;

    public function hasUsuario(){
        return $this->hasOne('\App\Models\Usuario', 'idUsuarios', 'fk_idusuario');
    }

}

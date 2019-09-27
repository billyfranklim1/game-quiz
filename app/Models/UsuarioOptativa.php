<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class UsuarioOptativa extends Authenticatable
{
    protected $table = 'usuario_optativas';
    protected $primaryKey = "id_usuario_optativas";
    public $timestamps = false;

}

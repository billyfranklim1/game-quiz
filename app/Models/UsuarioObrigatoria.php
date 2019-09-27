<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class UsuarioObrigatoria extends Authenticatable
{
    protected $table = 'disciplina_usuario';
    protected $primaryKey = "id_usuario_obrigatoria";
    public $timestamps = false;

}

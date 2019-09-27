<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Disciplina extends Authenticatable
{
    protected $table = 'obrigatorias';
    protected $primaryKey = "idDisciplina";
    public $timestamps = false;

    public function hasUsuario(){
        return $this->hasOne('\App\Models\UsuarioObrigatoria', 'id_usuario_obrigatoria', 'disciplina_IdDisciplina');
    }
}

<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Engenharia;
class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $primaryKey = "idUsuarios";

//     static function usuarioLogado()
//     {
//         //     return Auth::user()->fk_idengenharia;
//         // return Usuario::hasEngenharia();
//         $engenharia =Engenharia::where('idEngenharia', Auth::user()->fk_idengenharia)->get();
//         // $engenharia = (array) $engenharia;
//         return $engenharia;
//     }
    public function hasEngenharia()
    {
            return $this->hasOne('\App\Models\Engenharia', 'idEngenharia', 'fk_idengenharia');
    }
    public function hasPeriodo()
    {
            return $this->hasOne('\App\Models\Periodo', 'idPeriodos', 'fk_idperiodo');
    }
    public function disciplinaObrigatoria()
    {
            return $this->belongsToMany('\App\Models\UsuarioObrigatoria', 'disciplina_usuario','usuario_idUsuarios', 'disciplina_idDisciplina');
    }
    public function disciplinaOptatva()
    {
            return $this->belongsToMany('\App\Models\UsuarioOptativa', 'usuario_optativas','fk_idusuario', 'fk_idoptativa');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $primaryKey = "idUsuarios";
    // protected $fillable = ['stremailusuario','periodoentrada','strsenha','fk_idengenharia'];
    // protected $guarded = ['idUsuarios'];

    // protected $table = "tblusuariofuncionario";
    // protected $primaryKey = "idusuariofuncionario";
    // protected static $logAttributes = ['*']; ///
    // public $timestamps = false;
    public function hasEngenharia(){return $this->hasOne('\App\Models\Engenharia', 'idEngenharia', 'fk_idengenharia');}
    public function hasPeriodo(){return $this->hasOne('\App\Models\Periodo', 'idPeriodos', 'fk_idperiodo');}



}

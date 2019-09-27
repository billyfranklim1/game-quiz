<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Periodo extends Authenticatable
{
    protected $table = 'periodos';
    protected $primaryKey = "idPeriodos";
    // protected $fillable = ['stremailusuario','periodoentrada','strsenha','fk_idengenharia'];
    // protected $guarded = ['idUsuarios'];

    // protected $table = "tblusuariofuncionario";
    // protected $primaryKey = "idusuariofuncionario";
    // protected static $logAttributes = ['*']; ///
    public $timestamps = false;

}

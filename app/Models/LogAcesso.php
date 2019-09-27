<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Engenharia;
class LogAcesso extends Authenticatable
{
    protected $table = 'logAcesso';
    protected $primaryKey = "idlogacesso";
    public $timestamps = false;

    // idlogacesso
    // idusuario
    // tempo
}

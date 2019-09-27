<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Pergunta extends Authenticatable
{
    protected $table = 'pergunta';
    protected $primaryKey = "idPergunta";
    public $timestamps = false;

}

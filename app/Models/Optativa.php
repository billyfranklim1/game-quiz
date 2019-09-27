<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class Optativa extends Authenticatable
{
    protected $table      = 'optativas';
    protected $primaryKey = "idOpatativa";
    public $timestamps    = false;

}

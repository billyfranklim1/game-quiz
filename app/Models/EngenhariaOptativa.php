<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class EngenhariaOptativa extends Authenticatable
{
    protected $table = 'engenharia_optativas';
    protected $primaryKey = "id_engenharia_optativa";
    public $timestamps = false;

    public function hasEngenharia(){
        return $this->hasOne('\App\Models\Engenharia', 'idEngenharia', 'fk_idengenharia');
    }

    public function hasOptativa(){
        return $this->hasOne('\App\Models\Optativa', 'idOptativa', 'fk_idoptativa');
    }

}

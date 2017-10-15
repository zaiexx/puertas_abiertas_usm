<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
 
    public function users() {

        return $this->hasMany('App\User', 'rol_id', 'id_rol');
    
    }

}



<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password','rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



  public function rol() {

        return $this->hasOne('App\Rol', 'id_rol', 'rol_id');

    }


    public function hasRole($roles) {
    
        $this->have_role = $this->getUserRole();

        // Check if the user is a root account
        if($this->have_role->nombre == 'Root') {
            return true;
        }

        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    private function getUserRole() {
    
        return $this->rol()->getResults();
    
    }

    private function checkIfUserHasRole($need_role) {
    
        return (strtolower($need_role)==strtolower($this->have_role->nombre)) ? true : false;
    
    }









}


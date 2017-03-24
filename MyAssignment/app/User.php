<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $table = "Usser";
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function role(){       }
    //         }
    //     }else{
    //         return $this->checkIfUserHasRole($roles);
        
    //     return $this->hasOne('App\Role','id', 'role_id');
    // }

    // private function checkIfUserHasRole($need_role){
    //     return (strtolower($need_role)==strtolower($this->role->name)) ? true:null;
    // }

    // public function hasRole($roles){
    //     if(is_array($roles)){
    //         foreach ($roles as $need_role) {
    //             if ($this->checkIfUserHasRole($need_role)) {
    //                 return true;
    //      }
    //     return false;
    // }
}

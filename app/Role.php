<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    public function permissions(){
        return $this->belongsToMany('App\Permission');
        //return $this->belongsToMany(Role::class);
    }
    
    public function givePermissionTo(Permission $permission){
        return $this->permissions()->save($permission);
    }
}

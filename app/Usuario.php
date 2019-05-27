<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['name', 'age', 'gender', 'rol_id'];

    public function services(){

    	return $this->hasMany('App\Service');
    }

    public function rol(){

    	return $this->hasOne('App\Rol');
    }
}
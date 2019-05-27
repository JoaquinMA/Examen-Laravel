<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['rol'];

    public function usuario(){

    	return $this->belongsTo('App\Usuario');
    }
}

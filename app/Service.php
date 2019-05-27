<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['user_id', 'name', 'status'];

    public function usuario(){

    	return $this->belongsTo('App\Usuario')
    }
}

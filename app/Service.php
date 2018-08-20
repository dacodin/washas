<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // protected $table = 'services';
    public function addons(){
    	return $this->hasMany('App\Addon');
    }
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    protected $table = 'user';
	
	
	public function isAdmin(){
		return $this->is_admin;
	}
}

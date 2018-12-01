<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
	
	
	
	 public $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
	
	
	protected $cast=[
		
		'admin'=>'boolean'
	];
	
	
	public function isAdmin(){
		return $this->is_admin;
	}
	
	public function setPasswordAttribute($password)
{
    $this->attributes['password'] = \Hash::make($password);
}
	
	
}

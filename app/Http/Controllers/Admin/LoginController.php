<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $loginView='admin.login.login';
    protected $guard='admins';
	
	public function authenticated(){
		return redirect('/AdminPanel/Dashboard');
	}
}

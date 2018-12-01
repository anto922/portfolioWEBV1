<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrator;
use App\studies;
use App\skills;
use App\Experience;
use App\Works;

class PortfolioController extends Controller
{
    public function index(){
		
		$user= Administrator::find(1);
        $studies = Studies::all();
        $skills  = skills::all();
        $exp = Experience::all();
        $works = Works::all();
        
        
        $skills = $skills->toArray();
        
        

		return view('index',compact('user','studies','skills','exp','works'));
		
		
		
	}
	
	
	
}

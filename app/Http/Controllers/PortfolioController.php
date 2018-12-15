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
        $works = works::join('skills', 'works.id_skill', '=', 'skills.id')->select('works.*', 'skills.description as skill_description')->get();
        
        
        $filas_skills = is_float(count($skills)/4) ? round(count($skills)/4+1): count($skills)/4 ; 
        
        

		return view('index',compact('user','studies','skills','exp','works','filas_skills'));
		
		
		
	}
	
	
	
}

<?php

namespace App\Http\Controllers;

use App\Administrator;
use App\Experience;
use App\skills;
use App\studies;
use App\Works;

class PortfolioController extends Controller
{
    public function index()
    {

        $user = Administrator::find(1);
        $studies = Studies::orderby('date_start', 'DESC')->get();
        $skills = skills::all();
        $exp = Experience::orderby('date_start', 'DESC')->get();
        $works = works::join('skills', 'works.id_skill', '=', 'skills.id')->select('works.*', 'skills.description as skill_description')->get();

        return view('index', compact('user', 'studies', 'skills', 'exp', 'works'));

    }

}

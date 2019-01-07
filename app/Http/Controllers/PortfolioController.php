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
        $studies = Studies::all();
        $skills = skills::all();
        $exp = Experience::all();
        $works = works::join('skills', 'works.id_skill', '=', 'skills.id')->select('works.*', 'skills.description as skill_description')->get();

        return view('index', compact('user', 'studies', 'skills', 'exp', 'works'));

    }

}

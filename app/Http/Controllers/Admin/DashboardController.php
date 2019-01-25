<?php

namespace App\Http\Controllers\Admin;

use App\Administrator;
use App\Experience;
use App\Http\Controllers\Controller;
use App\skills;
use App\studies;
use App\Works;

class DashboardController extends Controller
{
    public function show()
    {

        $user = Administrator::find(1);
        $studies = Studies::all()->count();
        $skills = skills::all()->count();
        $exp = Experience::all()->count();
        $works = works::all()->count();

        return view('admin.dashboard.show', compact('user', 'studies', 'skills', 'exp', 'works'));

    }
}

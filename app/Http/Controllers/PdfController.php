<?php

namespace App\Http\Controllers;

use App\Administrator;
use App\Experience;
use App\skills;
use App\studies;
use App\Works;
use Barryvdh\DomPDF\PDF;

class PdfController extends Controller
{
    public function generatePDF()
    {

        $user = Administrator::find(1);
        $studies = Studies::all();
        $skills = skills::all();
        $exp = Experience::all();
        $works = works::join('skills', 'works.id_skill', '=', 'skills.id')->select('works.*', 'skills.description as skill_description')->get();

        $pdf = \PDF::loadView('admin.pdf.cv_pdf', compact('user', 'studies', 'skills', 'exp', 'works'));

        return $pdf->stream();

    }
}

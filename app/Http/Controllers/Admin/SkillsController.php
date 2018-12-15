<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {

        $skills = Skills::all();

        $titulo = "Listado de Habilidades";

        return view('admin.skills.index', compact('skills', 'titulo'));
    }

    public function show(Skills $skill)
    {

        return view('admin.skill.show', compact('skill'));

    }

    public function create()
    {

        return view('admin.skills.create');
    }

    public function store(Request $request)
    {

        $datos = request()->validate([
            'description' => 'required',
            'level' => 'required',
            'icon_skill' => 'required',

        ], [
            'description.required' => 'El campo descripción es obligatorio',
            'level.required' => 'El campo nivel es obligatorio',
            'icon_skill' => 'El campo icono es obligatorio',
        ]);

        $ruta = $request->file('icon_skill')->store('public');

        Skills::create([
            'description' => $datos["description"],
            'level' => $datos["level"],
            'icon_skill' => $ruta,
            'id_user' => auth()->id(),

        ]);
        return redirect('AdminPanel/Habilidades')->with('status', 'Habilidad añadida correctamente');
    }

    public function edit(Skills $skill)
    {

        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Skills $skill, Request $request)
    {

        $datos = request()->validate([
            'description' => 'required',
            'level' => 'required',

        ], [
            'description.required' => 'El campo descripción es obligatorio',
            'level.required' => 'El campo nivel es obligatorio',
        ]);

        $request->hasFile('icon_skill') ? $ruta = $request->file('icon_skill')->store('public') : $ruta = $skill->icon_skill;

        if ($request->hasFile('icon_work') == true) {
            $skill->whereId($skill->id)->update([
                'description' => $datos["description"],
                'level' => $datos["level"],
                'icon_skill' => $ruta,
                'id_user' => auth()->id(),

            ]);
        } else {
            $skill->whereId($skill->id)->update([
                'description' => $datos["description"],
                'level' => $datos["level"],
                'icon_skill' => $skill->icon_skill,
                'id_user' => auth()->id(),

            ]);
        }
        return redirect('AdminPanel/Habilidades')->with('status', 'Habilidad actualizada correctamente');
    }

    public function destroy(Skills $skill)
    {

        Skills::where('id', $skill->id)->delete();

        return redirect('/AdminPanel/Habilidades')->with('status', 'Habilidad eliminada correctamente');

    }
}

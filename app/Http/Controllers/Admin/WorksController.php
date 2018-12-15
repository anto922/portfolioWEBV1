<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Skills;
use App\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{

    public function index()
    {
        $works = works::join('skills', 'works.id_skill', '=', 'skills.id')->select('works.*', 'skills.description as skill_description')->get();

        // dd($works);

        $titulo = "Listado de Trabajos";

        return view('admin.works.index', compact('works', 'titulo'));
    }

    // public function show(Studies $studie){

    // return view('admin.studies.show',compact('studie'));

    // }
    public function create()
    {
        $skills = skills::all();

        return view('admin.works.create', compact('skills'));
    }

    public function store(Request $request)
    {
        $datos = request()->validate([
            'description' => 'required',
            'id_skill' => 'required',
            'link' => 'required',
            'icon_work' => 'required',
        ], [
            'description.required' => 'El campo descripcion es obligatorio',
            'id_skill.required' => 'El campo lenguaje es obligatorio',
            'link.required' => 'El campo enlace es obligatorio',
            'icon_work.required' => 'El campo icono es obligatorio',
        ]);

        $request->hasFile('icon_work') ? $ruta = $request->file('icon_work')->store('public') : $ruta = "";

        works::create([
            'description' => $datos["description"],
            'id_skill' => $datos["id_skill"],
            'link' => $datos["link"],
            'icon_work' => $ruta,
            'id_user' => auth()->id(),
        ]);
        return redirect('AdminPanel/Trabajos')->with('status', 'Trabajo añadido correctamente');
    }

    public function edit(works $work)
    {
        $skills = skills::all();

        return view('admin.works.edit', compact('skills', 'work'));
    }

    public function update(Works $work, Request $request)
    {
        $datos = request()->validate([
            'description' => 'required',
            'id_skill' => 'required',
            'link' => 'required',
            'icon_work' => '',
        ], [
            'description.required' => 'El campo descripcion es obligatorio',
            'id_skill.required' => 'El campo lenguaje es obligatorio',
            'link.required' => 'El campo enlace es obligatorio',
        ]);

        $request->hasFile('icon_work') ? $ruta = $request->file('icon_work')->store('public') : $ruta = $work->icon_work;

        $work->whereId($work->id)->update([
            'description' => $datos["description"],
            'id_skill' => $datos["id_skill"],
            'link' => $datos["link"],
            'icon_work' => $ruta,
            'id_user' => auth()->id(),
        ]);

        return redirect('AdminPanel/Trabajos')->with('status', 'Trabajos actualizado correctamente');
    }

    public function destroy(Works $work)
    {
        Works::where('id', $work->id)->delete();

        return redirect('/AdminPanel/Trabajos')->with('status', 'Trabajo eliminado correctamente');
    }
}

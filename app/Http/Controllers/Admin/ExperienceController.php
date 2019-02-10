<?php

namespace App\Http\Controllers\Admin;

use App\Cities;
use App\Experience;
use App\Http\Controllers\Controller;
use App\Provinces;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {

        $experience = Experience::join('province', 'experience.id_province', '=', 'province.id')
            ->join('city', 'experience.id_city', '=', 'city.id')->select('experience.*', 'province.name as province', 'city.name as city')->get();

        // DD($experience);

        $titulo = "Listado de Experiencia";

        return view('admin.experience.index', compact('experience', 'titulo'));
    }

    public function show(Experience $experience)
    {

        return view('admin.experience.show', compact('experience'));

    }

    public function create()
    {
        $provinces = Provinces::all();
        $cities = Cities::all();

        return view('admin.experience.create', compact('provinces', 'cities'));
    }

    public function store()
    {

        $datos = request()->validate([
            'date_start' => 'required',
            'date_end' => '',
            'company' => 'required',
            'province' => 'required',
            'city' => 'required',
            'description' => ' '], [
            'date_start.required' => 'El campo fecha de inicio es obligatorio',
            'company.required' => 'El campo empresa es obligatorio',
            'province.required' => 'Seleccione una provincia',
            'city.required' => 'Seleccione una localidad',

        ]);

        Experience::create([
            'date_start' => $datos["date_start"],
            'date_end' => $datos["date_end"],
            'company' => $datos["company"],
            'id_province' => $datos["province"],
            'id_city' => $datos["city"],
            'description' => $datos["description"],
            'id_user' => auth()->id(),

        ]);
        return redirect('AdminPanel/Experiencia')->with('status', 'Experiencia añadida correctamente');
    }

    public function edit(Experience $experience)
    {

        $provinces = Provinces::all();
        $cities = Cities::all();

        return view('admin.experience.edit', compact('experience', 'provinces', 'cities'));
    }

    public function update(Experience $experience)
    {

        $datos = request()->validate([
            'date_start' => 'required',
            'date_end' => '',
            'company' => 'required',
            'province' => 'required',
            'city' => 'required',
            'description' => ' '], [
            'date_start.required' => 'El campo fecha de inicio es obligatorio',
            'company.required' => 'El campo empresa es obligatorio',
            'province.required' => 'Seleccione una provincia',
            'city.required' => 'Seleccione una localidad',

        ]);

        $experience->whereId($experience->id)->update([
            'date_start' => $datos["date_start"],
            'date_end' => $datos["date_end"],
            'company' => $datos["company"],
            'id_province' => $datos["province"],
            'id_city' => $datos["city"],
            'description' => $datos["description"],
            'id_user' => auth()->id(),

        ]);

        return redirect('AdminPanel/Experiencia')->with('status', 'Experiencia actualizada correctamente');
    }

    public function destroy(Experience $experience)
    {
        //dd($experience->id);
        Experience::where('id', $experience->id)->delete();

        return redirect('/AdminPanel/Experiencia')->with('status', 'Experiencia eliminada correctamente');

    }

    public function getCities(Provinces $province_id)
    {

        $cities = Cities::join('province', 'city.id_province', '=', 'province.id')->where('city.id_province', '=', $province_id->id)->select('city.*')->get();

        return response()->json($cities);

    }
}

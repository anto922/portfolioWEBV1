<?php

namespace App\Http\Controllers\Admin;

use App\Cities;
use App\Http\Controllers\Controller;
use App\Provinces;
use App\Studies;
use Illuminate\Http\Request;

class StudiesController extends Controller
{
    public function index()
    {

        $studies = studies::join('province', 'studies.id_province', '=', 'province.id')
            ->join('city', 'studies.id_city', '=', 'city.id')->select('studies.*', 'province.name as province', 'city.name as city')->get();

        $titulo = "Listado de Formación";

        return view('admin.studies.index', compact('studies', 'titulo'));
    }

    public function show(Studies $studie)
    {

        return view('admin.studies.show', compact('studie'));

    }

    public function create()
    {
        $provinces = Provinces::all();
        $cities = Cities::all();

        return view('admin.studies.create', compact('provinces', 'cities'));
    }

    public function store()
    {

        $datos = request()->validate([
            'date_start' => 'required',
            'date_end' => 'required',
            'province' => 'required',
            'city' => 'required',
            'school' => 'required',
            'course' => 'required'], [
            'date_start.required' => 'El campo fecha de inicio es obligatorio',
            'date_end.required' => 'El campo fecha de fin es obligatorio',
            'province.required' => 'Seleccione una provincia',
            'city.required' => 'Seleccione una localidad',
            'school.required' => 'El campo escuela es obligatorio',
            'course.required' => 'El campo curso es obligatorio',

        ]);

        Studies::create([
            'date_start' => $datos["date_start"],
            'date_end' => $datos["date_end"],
            'school' => $datos["school"],
            'id_province' => $datos["province"],
            'id_city' => $datos["city"],
            'course' => $datos["course"],
            'id_user' => auth()->id(),

        ]);
        return redirect('AdminPanel/Estudios')->with('status', 'Estudio añadido correctamente');
    }

    public function edit(Studies $studie)
    {

        $provinces = Provinces::all();
        $cities = Cities::all();

        return view('admin.studies.edit', compact('studie', 'provinces', 'cities'));
    }

    public function update(Studies $studie)
    {

        $datos = request()->validate([
            'date_start' => 'required',
            'date_end' => 'required',
            'province' => 'required',
            'city' => 'required',
            'course' => 'required',
            'school' => 'required'], [
            'date_start.required' => 'El campo fecha de inicio es obligatorio',
            'date_end.required' => 'El campo fecha de fin es obligatorio',
            'province.required' => 'Seleccione una provincia',
            'city.required' => 'Seleccione una localidad',
            'course.required' => 'El campo curso es obligatorio',
            'school.required' => 'El campo escuela es obligatorio',

        ]);

        $studie->whereId($studie->id)->update([
            'date_start' => $datos["date_start"],
            'date_end' => $datos["date_end"],
            'course' => $datos["course"],
            'school' => $datos["school"],
            'id_province' => $datos["province"],
            'id_city' => $datos["city"],
            'id_user' => auth()->id(),

        ]);

        return redirect('AdminPanel/Estudios')->with('status', 'Estudio actualizado correctamente');
    }

    public function destroy(Studies $studie)
    {
        //dd($experience->id);
        Studies::where('id', $studie->id)->delete();

        return redirect('/AdminPanel/Estudios')->with('status', 'Estudio eliminado correctamente');

    }

    public function getCities(Provinces $province_id)
    {

        $cities = Cities::join('province', 'city.id_province', '=', 'province.id')->where('city.id_province', '=', $province_id->id)->select('city.*')->get();

        return response()->json($cities);

    }
}

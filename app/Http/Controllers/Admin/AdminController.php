<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrator;

class AdminController extends Controller
{

    public function index()
    {
        $user = Administrator::find(1);

        return view('index', compact('user'));
    }

    public function edit()
    {
        $user = Administrator::find(1);

        return view('admin.profile.edit', compact('user'));
    }

    public function update(Administrator $admin, Request $request)
    {
        $datos = request()->validate([
            'email' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'password' => '',
            'photo' => '',
            'about_me'=> ''
        ], [
            'email.required' => 'El campo email es obligatorio',
            'age.required' => 'El campo edad es obligatorio',
            'telephone.required' => 'El campo telefono es obligatorio',
            
        ]);

        $request->hasFile('photo') ? $ruta = $request->file('photo')->store('public') : $ruta = $admin->photo;

       
        if(strlen($datos["password"])>0){
        $admin->whereId($admin->id)->update([
            'email' => $datos["email"],
            'age' => $datos["age"],
            'telephone' => $datos["telephone"],
            'password' => bcrypt($datos["password"]),
            'photo' => $ruta,
            'about_me' => $datos["about_me"]
        ]);
        }else{
            $admin->whereId($admin->id)->update([
                'email' => $datos["email"],
                'age' => $datos["age"],
                'telephone' => $datos["telephone"],
                'photo' => $ruta,
                'about_me' => $datos["about_me"]
            ]);
        }
        return redirect('AdminPanel/Perfil/edit')->with('status', 'Perfil actualizado correctamente');
    }
}

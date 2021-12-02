<?php

namespace App\Http\Controllers;

Use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //retorna el formulario
    public function userform(){
        return view('usuarios.userform');
    }

    //save usuarios
    public function save(Request $request)
    {

        $validator = $this->validate($request, [
            'nombre' => 'required|string|max:150',
            'email' => 'required|string|max:150|email'
        ]);

        $userdata = request()->except('_token');

        Usuario::insert($userdata);

        return back()->with('usuarioGuardado', 'Usuario Guardado');
        
        //return 'Usuario guardado';
        //return response()->json($userdata);
    }
}

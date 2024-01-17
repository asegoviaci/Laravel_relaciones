<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function view(){
        $usuarios = Usuario::all();
        return view('usuario.crear')->with('usuarios', $usuarios);
    }

    public function add(Request $request){

        $validacion = $request->validate([
            'nombre' => 'required|string',
            'edad' => 'required|integer|min:0',
            'email' => 'required|email|unique:usuarios,email',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|in:Masculino,Femenino,Otros',
        ]);
        
        Usuario::create($request->all());
        return redirect()->route('usuario.crear');
    }

    public function delete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuario.crear');
    }

    public function edit($id){
        $usuario = Usuario::all();
        $usuario = Usuario::find($id);
        return view('usuario.edit')->with('usuario', $usuario);
    }

    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        return redirect()->route('usuario.crear');
    }
}

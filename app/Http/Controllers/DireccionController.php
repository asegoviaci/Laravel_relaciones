<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function view(){
        $direcciones = Direccion::all();
        return view('direccion.crear')->with('direcciones', $direcciones);
    }

    public function add(Request $request){
        Direccion::create($request->all());
        return redirect()->route('direccion.crear');
    }

    public function delete($id){
        $direccion = Direccion::find($id);
        $direccion->delete();
        return redirect()->route('direccion.crear');
    }

    public function edit($id){
        $direccion = Direccion::find($id);
        return view('direccion.edit')->with('direccion', $direccion);
    }

    public function update(Request $request, $id){
        $direccion = Direccion::find($id);
        $direccion->update($request->all());
        return redirect()->route('direccion.crear');
    }

    public function asignarView(){
        $direcciones = Direccion::all();
        $usuarios = Usuario::all();
        return view('direccion.asignar')->with('direcciones', $direcciones) ->with('usuarios', $usuarios);
    }

    public function asignar(Request $request){
        $usuario = Usuario::find($request->input('usuario'));

        $direccion = Direccion::find($request->input('direccion'));
        $direccion->usuario_id = $usuario->id;
        $direccion->save();
        
        return redirect()->route('direccion.asignar');
    }
}

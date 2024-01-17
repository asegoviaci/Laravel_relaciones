<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tema = Tema::all();
        return view("tema.crear")->with('tema', $tema);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tema = Tema::create($request->all());
        return redirect()->route('tema.crear');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $temas = Tema::find($id);
        return view('tema.edit')->with('temas', $temas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tema = Tema::find($id);
        $tema->update($request->all());
        return redirect()->route('tema.crear');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tema = Tema::find($id);
        $tema->delete();
        return redirect()->route('tema.crear');
    }
}

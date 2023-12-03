<?php

namespace App\Http\Controllers;

use App\Models\trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trabajador= trabajador::where('estado', 1)->get();
        return view("persona.trabajador", compact('trabajador'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $trabajador = new trabajador();
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(trabajador $trabajador,$id)
    {
        $trabajador = trabajador::find($id);

        return view('persona.trabajadorEdit', compact('trabajador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $trabajador = trabajador::find($id);
        if ($trabajador) {
            $trabajador->nombre = $request->nombre;
            $trabajador->apellido = $request->apellido;
            $trabajador->save();
            return redirect('indexAutor');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trabajador $trabajador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trabajador $trabajador, $id)
    {
        $trabajador = trabajador::find($id);
        if ($trabajador) {
            $trabajador->estado = false;
            $trabajador->save();
            return back();
        }
}
}
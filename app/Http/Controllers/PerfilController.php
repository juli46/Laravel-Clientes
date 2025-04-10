<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $perfiles = Perfil::with('usuario')->get();
    return view('perfiles.index', compact('perfiles'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuarios::all();
        return view('perfiles.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'usuario_id' => 'required|exists:usuarios,id',
        'descripcion' => 'required|in:Administrador,Cliente,Proveedor',
    ]);

    Perfil::create([
        'usuario_id' => $request->usuario_id,
        'descripcion' => $request->descripcion,
    ]);

    return redirect()->route('perfiles.index')->with('success', 'Perfil creado correctamente.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $perfil = Perfil::findOrFail($id);
        return view('perfiles.edit', compact('perfil'));
    }
        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->update(['descripcion' => $request->descripcion]);
        
        return redirect()->route('perfiles.index')->with('success', 'Perfil actualizado correctamente.');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->delete();
        
        return redirect()->route('perfiles.index')->with('success', 'Perfil eliminado correctamente.');
    }
}

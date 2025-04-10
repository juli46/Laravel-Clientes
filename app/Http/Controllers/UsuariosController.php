<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('usuarios.index', ['usuarios' => Usuarios::all()]);
    }

    public function create() {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255',
        ]);

        // Crear un nuevo usuario con los datos validados
        Usuarios::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
        ]);

        // Redirigir a la lista de usuarios con un mensaje de éxito
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) 
    { 
        $usuario = Usuarios::findOrFail($id); 
        return view('usuarios.edit', compact('usuario')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) 
    { 
        $request->validate([ 
            'nombre' => 'required|string|max:255', 
            'apellido' => 'required|string|max:255', 
            'correo' => 'required|string|email|max:255' 
        ]); 

        $usuario = Usuarios::findOrFail($id); 
        $usuario->update($request->all()); 

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();
        
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}


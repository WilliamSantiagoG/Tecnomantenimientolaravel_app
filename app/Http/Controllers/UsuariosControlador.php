<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('Usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuarios();
        $usuario->Nombre = $request->input('Nombre');
        $usuario->Telefono = $request->input('Telefono');
        $usuario->Contraseña = $request->input('Contraseña');
        $usuario->save();

        return redirect()->route('Usuarios.index')->with('success', 'Usuario guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuarios::find($id);
        return view('Usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuarios::find($id);
        return view('Usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->Nombre = $request->input('Nombre');
        $usuario->Telefono = $request->input('Telefono');
        $usuario->Contraseña = $request->input('Contraseña');
        $usuario->save();

        return redirect()->route('Usuarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->delete();

        return redirect()->route('Usuarios.index')->with('success', 'Usuario eliminado exitosamente');
    }
}

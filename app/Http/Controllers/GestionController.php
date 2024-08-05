<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Models\Gestion;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource for a specific user.
     */
    public function index($userId)
    {
        $gestiones = Gestion::where('idUsuario', $userId)->get();
        return view('Gestion.index', compact('gestiones', 'userId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($userId)
    {
        $usuario = Usuarios::find($userId);
        return view('Gestion.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $userId)
    {
        $gestion = new Gestion();
        $gestion->idUsuario = $userId;
        $gestion->DescripcionCliente = $request->input('DescripcionCliente');
        $gestion->EstadoFisico = $request->input('EstadoFisico');
        $gestion->Conclusiones = $request->input('Conclusiones');
        $gestion->Modelo = $request->input('Modelo');
        $gestion->fecha_mantenimiento = $request->input('fecha_mantenimiento');

        if ($request->hasFile('imagenes')) {
            $imagenes = [];
            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('public/Gestion');
                $imagenes[] = $path;
            }
            $gestion->Imagenes = json_encode($imagenes); // Guardar como JSON
        }

        $gestion->save();

        return redirect()->route('Usuarios.show', $userId)->with('success', 'Mantenimiento creado exitosamente');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

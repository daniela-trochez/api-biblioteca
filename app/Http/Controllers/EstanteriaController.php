<?php

namespace App\Http\Controllers;

use App\Models\Estanteria;
use App\Models\Tema;
use Illuminate\Http\Request;

class EstanteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los campos
        $validated = $request->validate([
            'biblioteca_id' => 'required|exists:bibliotecas,id', // La biblioteca debe existir
            'tema_id' => 'required|exists:temas,id', // El tema debe existir
        ]);

        // Obtener el tema para generar el código
        $tema = Tema::findOrFail($validated['tema_id']);

        // Contar cuántas estanterías ya existen en la biblioteca para asignar el número
        $numero_estanterias = Estanteria::where('biblioteca_id', $validated['biblioteca_id'])->count() + 1;

        // Generar el código de estantería (Primera letra del tema + número)
        $codigo_estanteria = strtoupper(substr($tema->nombre, 0, 1)) . $numero_estanterias;

        // Crear la estantería
        $estanteria = Estanteria::create([
            'biblioteca_id' => $validated['biblioteca_id'],
            'tema_id' => $validated['tema_id'],
            'codigo' => $codigo_estanteria,
        ]);

        return response()->json($estanteria, 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

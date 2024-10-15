<?php

namespace App\Http\Controllers;

use App\Models\Copia;
use App\Models\Estanteria;
use App\Models\Libro;
use Illuminate\Http\Request;

class CopiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
            'libro_id' => 'required|exists:libros,id', // El libro debe existir
            'estanteria_id' => 'required|exists:estanterias,id', // La estantería debe existir
            'numero_copia' => 'required|integer|min:1',
        ]);

        // Obtener el libro y la estantería
        $libro = Libro::findOrFail($validated['libro_id']);
        $estanteria = Estanteria::findOrFail($validated['estanteria_id']);

        // Validar que la estantería pertenezca al mismo tema que el libro
        if ($libro->estanteria_id !== $estanteria->id) {
            return response()->json(['error' => 'La estantería no pertenece al mismo tema que el libro.'], 400);
        }

        // Crear la copia
        $copia = Copia::create($validated);

        return response()->json($copia, 201);
    
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

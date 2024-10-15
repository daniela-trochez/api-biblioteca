<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
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
            'nombre' => 'required|string|min:5|max:45|regex:/^[^\s].+[^\s]$/',
            'fecha_publicacion' => 'required|date',
            'autor_id' => 'required|exists:autores,id', // El autor debe existir
            'estanteria_id' => 'required|exists:estanterias,id', // La estantería debe existir
        ]);

        // Crear el libro con los datos validados
        $libro = Libro::create($validated);

        return response()->json($libro, 201);
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

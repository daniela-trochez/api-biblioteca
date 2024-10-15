<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar y crear la biblioteca
         $biblioteca = Biblioteca::create($request->validate([
            'nombre' => 'required|string|min:5|max:30|regex:/^[^\s].+[^\s]$/',
            'ubicacion' => 'required|string|min:20|max:125|regex:/^[^\s].+[^\s]$/',
            'descripcion' => 'nullable|string|max:500|regex:/^[^\s].+[^\s]$/',
        ]));

        return response()->json($biblioteca, 201);
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

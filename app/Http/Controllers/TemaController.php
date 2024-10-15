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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   
        public function store(Request $request)
        {
            
            $tema = Tema::create($request->validate([
                'nombre' => 'required|string|min:5|max:30|regex:/^[^\s].+[^\s]$/',
                'codigo_color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/', // Validar el código hexadecimal
            ]));
    
            return response()->json($tema, 201);
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

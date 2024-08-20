<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabla2;

class tabla2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tabla2.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabla2.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos
        $validated = $request->validate([
            'correo' => 'required|string|max:100',
            'edad' => 'required|string|max:100',
            'curso' => 'required|string|max:100'
        ]);

        // Crear una nueva instancia del modelo y guardar los datos
        tabla2::create($validated);

        return redirect()->route('tabla2.index');
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

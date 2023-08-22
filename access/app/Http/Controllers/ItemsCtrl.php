<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsCtrl extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'modelo' => 'required|string|max:20',
            'marca' => 'required|string|max:50',
            'ano' => 'required|number|max:4',
            'potencia' => 'required|number|max:4',
            'valor' => 'required|number|max:10',
        ]);

        $user = User::create($data);

        return response()->json(['message' => 'Modelo registrado', 'modelo' => $modelo, 'potencia' => $potencia], 201);
    }

    public function index()
    {
        //
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

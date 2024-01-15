<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;

class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('partida.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
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

    public function jolasAzalpena(int $partidaId) {
        return view('jolasa', ['partidaId' => $partidaId]);
    }

    public function hasiera(int $partidaId) {
        $partida = Partida::find($partidaId);
        return view('hasiera', ['partida' => $partida]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prueba;


class PruebaController extends Controller
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

    public function prueba3(String $partidaId){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba3")->update(["bukatuta" => 1]);

        return redirect()->route("hasiera", $partidaId);

    }

    public function prueba4(String $partidaId){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba4")->update(["bukatuta" => 1]);

        return redirect()->route("sotoa", $partidaId);

    }
}

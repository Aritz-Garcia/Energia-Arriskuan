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

    public function prueba1(String $partidaId, String $denbora){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba1")->update(["bukatuta" => 1, "denbora" => $this->denboraAldatu($denbora)]);

        if ($this->konprobatu($partidaId)) {
            return redirect()->route("irabazi", [$partidaId, $this->denboraAldatu($denbora)]);
        }

        return redirect()->route("biltegia", $partidaId);
    }

    public function prueba2(String $partidaId, String $denbora){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba2")->update(["bukatuta" => 1, "denbora" => $this->denboraAldatu($denbora)]);

        if ($this->konprobatu($partidaId)) {
            return redirect()->route("irabazi", [$partidaId, $this->denboraAldatu($denbora)]);
        }

        return redirect()->route("teilatua", $partidaId);
    }

    public function prueba3(String $partidaId, String $denbora){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba3")->update(["bukatuta" => 1, "denbora" => $this->denboraAldatu($denbora)]);

        if ($this->konprobatu($partidaId)) {
            return redirect()->route("irabazi", [$partidaId, $this->denboraAldatu($denbora)]);
        }

        return redirect()->route("hasiera", $partidaId);

    }

    public function prueba4(String $partidaId, String $denbora){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba4")->update(["bukatuta" => 1, "denbora" => $this->denboraAldatu($denbora)]);

        if ($this->konprobatu($partidaId)) {
            return redirect()->route("irabazi", [$partidaId, $this->denboraAldatu($denbora)]);
        }

        return redirect()->route("sotoa", $partidaId);

    }

    public function prueba5(String $partidaId, String $denbora){

        Prueba::where("id_partida", $partidaId)->where("izena", "prueba5")->update(["bukatuta" => 1, "denbora" => $this->denboraAldatu($denbora)]);

        if ($this->konprobatu($partidaId)) {
            return redirect()->route("irabazi", [$partidaId, $this->denboraAldatu($denbora)]);
        }

        return redirect()->route("sotoa", $partidaId);

    }

    public function denboraAldatu(int $denbora) {

        $partidaDenbora = 3600;

        $denbora = $partidaDenbora - $denbora;

        $denboraString = gmdate("i:s", $denbora);
        return $denboraString;
    }

    public function konprobatu(String $partidaId) {
        $irabazita1 = Prueba::where("id_partida", $partidaId)->where("izena", "prueba1")->where("bukatuta", 1)->first();
        $irabazita2 = Prueba::where("id_partida", $partidaId)->where("izena", "prueba2")->where("bukatuta", 1)->first();
        $irabazita3 = Prueba::where("id_partida", $partidaId)->where("izena", "prueba3")->where("bukatuta", 1)->first();
        $irabazita4 = Prueba::where("id_partida", $partidaId)->where("izena", "prueba4")->where("bukatuta", 1)->first();
        $irabazita5 = Prueba::where("id_partida", $partidaId)->where("izena", "prueba5")->where("bukatuta", 1)->first();

        if ($irabazita1 == null || $irabazita2 == null || $irabazita3 == null || $irabazita4 == null || $irabazita5 == null) {
            return false;
        } else {
            return true;
        }
    }
}

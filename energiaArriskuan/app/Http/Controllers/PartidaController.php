<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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

    public function jolasAzalpena(int $erabiltzaileaId) {

        if (Auth::user()->id == $erabiltzaileaId) {
            $partida = Partida::where('id_erabiltzailea', $erabiltzaileaId)->where('bukatuta', 0)->first();

            if ($partida == null) {
                $partida = new Partida();
                $partida->id_erabiltzailea = $erabiltzaileaId;
                $partida->save();

                for ($i = 1; $i <= 4; $i++) {
                    $partida->pruebas()->create([
                        'izena' => 'prueba' . $i,
                        'bukatuta' => 0,
                    ]);
                }
                return view('jolasa', ['partida' => $partida]);
            } else {
                return redirect()->route('hasiera', $partida->id);
            }
        } else {
            return redirect()->route('index');
        }


    }

    public function hasiera(int $partidaId) {
        $partida = Partida::find($partidaId);
        if ($partida == null || $partida->bukatuta == 1) {
            return redirect()->route('index');
        }
        return view('hasiera', ['partida' => $partida]);

    }

    public function biltegia(int $partidaId) {
        $partida = Partida::find($partidaId);
        if ($partida == null || $partida->bukatuta == 1) {
            return redirect()->route('index');
        }
        return view('biltegia', ['partida' => $partida]);

    }

    public function sotoa(int $partidaId) {
        $partida = Partida::find($partidaId);
        if ($partida == null || $partida->bukatuta == 1) {
            return redirect()->route('index');
        }
        return view('sotoa', ['partida' => $partida]);

    }

    public function patio(int $partidaId) {
        $partida = Partida::find($partidaId);
        if ($partida == null || $partida->bukatuta == 1) {
            return redirect()->route('index');
        }
        return view('patio', ['partida' => $partida]);

    }

    public function teilatua(int $partidaId) {
        $partida = Partida::find($partidaId);
        if ($partida == null || $partida->bukatuta == 1) {
            return redirect()->route('index');
        }
        return view('teilatua', ['partida' => $partida]);

    }

    public function denboraGorde(Request $request) {
        $partidaId = $request->input('partidaId');
        $valor = $request->input('valor');

        $value = intval($valor);
        $min = floor($value / 60);
        $seg = $value % 60;
        if ($min < 10) {
            $min = "0" + $min;
        }
        if ($seg < 10) {
            $seg = "0" + $seg;
        }
        $denborarenString = $min . ":" . $seg;
        Partida::where("id", $partidaId)->update(["denbora" => $denborarenString]);
    }
}

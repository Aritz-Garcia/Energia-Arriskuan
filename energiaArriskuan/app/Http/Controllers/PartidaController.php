<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;
use App\Models\Prueba;
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
    public function destroy(Request $request)
    {
        $partidaId = $request->input('partidaId');

        $partida = Partida::find($partidaId);

        $partida->delete();

        return redirect()->route('profile.index', Auth::user()->id);

    }

    public function jolasAzalpena(int $erabiltzaileaId) {

        if (Auth::user()->id == $erabiltzaileaId) {
            $partida = Partida::where('id_erabiltzailea', $erabiltzaileaId)->where('bukatuta', 0)->first();

            if ($partida == null) {
                $partida = new Partida();
                $partida->id_erabiltzailea = $erabiltzaileaId;
                $partida->denbora = "60:00";
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

        $berria = -1;
        if ($partida->created_at == $partida->updated_at) {
            $berria = 1;
        } else {
            $berria = 0;
        }

        return view('hasiera', ['partida' => $partida, "berria" => $berria]);

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
            $min = "0" . $min;
        }
        if ($seg < 10) {
            $seg = "0" . $seg;
        }
        $denborarenString = $min . ":" . $seg;
        Partida::where("id", $partidaId)->update(["denbora" => $denborarenString]);
    }

    public function gameOverUpdate($partidaId) {
        Partida::where("id", $partidaId)->update(["bukatuta" => 1]);
        return redirect()->route('gameOverView', $partidaId);
    }

    public function gameOverView($partidaId) {
        return view('partida.gameOver', ['partidaId' => $partidaId]);
    }

    public function irabaziUpdate($partidaId, $denbora) {
        Partida::where("id", $partidaId)->update(["bukatuta" => 1, "irabazita" => 1, "denbora" => $denbora]);
        return redirect()->route('irabaziView', $partidaId);
    }

    public function irabaziView($partidaId) {
        return view('partida.irabazita', ['partidaId' => $partidaId]);
    }

    public function klasifikazioa() {
        $partidak = Partida::where('bukatuta', 1)->where('irabazita', 1)->orderBy('denbora', 'asc')->get();
        $erabiltzaileak = User::all();
        $partidasPruebas = Partida::where('bukatuta', 1)->where('irabazita', 1)->with('pruebas')->orderBy('denbora', 'asc')->get();
        $probakSinOrden = $partidasPruebas->flatMap(function ($partida) {
            return $partida->pruebas;
        });
        $probak = $probakSinOrden->sort(function ($a, $b) {
            return $a->denbora <=> $b->denbora;
        })->values();
        return view('klasifikazioa', ['partidak' => $partidak, 'erabiltzaileak' => $erabiltzaileak, 'probak' => $probak]);
    }

    public function pistaUpdate($partidaId,$lekua,$denbora){
        Partida::where('id', $partidaId)->update(['denbora' => $this->denboraAldatu($denbora)]);
        switch ($lekua) {
            case 'hasiera':
                return redirect()->route('hasiera', $partidaId);
                break;
            case 'patioa':
                return redirect()->route('patio', $partidaId);
            break;
            case 'juego2':
                return redirect()->route('teilatua', $partidaId);
            break;
            case 'juego4':
                return redirect()->route('sotoa', $partidaId);
            break;
            case 'juego1':
                return redirect()->route('biltegia', $partidaId);
            break;
        }
    }

    public function denboraAldatu(int $denbora) {
        $denboraString = gmdate("i:s", $denbora);
        return $denboraString;
    }
}

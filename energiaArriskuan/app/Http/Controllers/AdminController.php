<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Partida;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin($userId)
    {
        if (Auth::user()->id == $userId) {

            $usuario = User::where('id', $userId)->where('rol', 1)->first();

            if ($usuario != null) {

                return view('admin.admin');
            } else {

                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }

    public function erabiltzaileakAdmin($userId)
    {
        if (Auth::user()->id == $userId) {

            $usuario = User::where('id', $userId)->where('rol', 1)->first();

            if ($usuario != null) {

                $users = User::where('rol', 1)->paginate(5);

                return view('admin.usuarios')->with('users', $users);
            } else {

                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }

    public function erabiltzaileakNormalak($userId)
    {
        if (Auth::user()->id == $userId) {

            $usuario = User::where('id', $userId)->where('rol', 1)->first();

            if ($usuario != null) {

                $users = User::where('rol', 0)->paginate(5);

                return view('admin.usuarios')->with('users', $users);
            } else {

                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }


    public function partidak($userId)
    {

        if (Auth::user()->id == $userId) {

            $usuario = User::where('id', $userId)->where('rol', 1)->first();

            if ($usuario != null) {

                $partidak = Partida::all()->where('bukatuta', 1);

                return view('admin.partidak')->with('partidak', $partidak);;
            } else {

                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(StoreUser $request): RedirectResponse
    public function store(StoreUser $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'abizena' => ['required', 'string', 'max:255'],
        //     'erabiltzailea' => ['required', 'string', 'max:255', 'unique:'.User::class],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'foto' => 'image',
        // ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'abizena' => $request->abizena,
        //     'erabiltzailea' => $request->erabiltzailea,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     // 'foto' => $request->foto,
        //     'rol' => 0,
        // ]);

        $user = User::create($request->all());

        $user->password = Hash::make($request->password);
        // $user->rol = 0;

        if ($request->file("foto")) {
            // guardar en strorage una foto
            $url = Storage::putFile("public/erabiltzaileak", $request->file("foto"));

            $urldb = str_replace("public", "storage", $url);

            // $url = Storage::putFile("storage/alumnos", $request->file("foto"));
            $user->foto = $urldb;
        } else {
            $user->foto = "storage/erabiltzaileak/default.png";
        }

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

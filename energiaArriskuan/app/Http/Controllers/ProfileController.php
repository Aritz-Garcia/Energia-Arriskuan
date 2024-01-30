<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Imagen;

class ProfileController extends Controller
{

    public function index(int $profilaId)
    {
        $profila = User::find($profilaId);

        if ($profila == null) {
            return Redirect::route('index');
        }

        return view('profile.index', compact('profila'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Obtén la instancia del usuario
        $user = $request->user();

        // Obtén la ruta de la foto actual
        $fotoActual = $user->foto;

        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if ($request->hasFile('foto')) {
            if ($fotoActual) {
                unlink(public_path($fotoActual));
            }

            $fotoPath = $request->file('foto')->store('erabiltzaileak', 'public');
            $user->foto = 'storage/' . $fotoPath;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroyAdmin(Request $request): RedirectResponse
    {
        // Validar que el usuario tiene permisos para realizar esta acción si es necesario
        // ...

        $perfilId = $request->input("perfilId");
        // Buscar al usuario
        $user = User::find($perfilId);

        // Verificar si el usuario existe
        if (!$user) {
            return Redirect::route('index');
        }

        // Eliminar al usuario
        $user->delete();

        return redirect()->route('admin', Auth::user()->id);
    }

    public function doAdmin(Request $request): RedirectResponse
    {
        $user = User::find($request->input('perfilId'));

        if ($user) {

            $user->rol = 1;

            $user->save();

            return redirect()->route('admin', Auth::user()->id);

        } else {
            return redirect()->route('index');
        }
    }

    public function removeAdmin(Request $request): RedirectResponse
    {
        $user = User::find($request->input('perfilaId'));

        if ($user) {

            $user->rol = 0;

            $user->save();

            return redirect()->route('admin', Auth::user()->id);

        } else {
            return redirect()->route('index');
        }
    }
}

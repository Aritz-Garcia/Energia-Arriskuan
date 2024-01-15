<?php

use App\Http\Controllers\PartidaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/kontaktua', function () {
    return view('kontaktua');
})->name('kontaktua');

Route::get('/jolasa', function () {
    return view('jolasa');
})->name('jolasa');

Route::get('/biltegia', function () {
    return view('biltegia');
})->name('biltegia');

Route::get('/patio', function () {
    return view('patio');
})->name('patio');

Route::get('/sotoa', function () {
    return view('sotoa');
})->name('sotoa');

Route::get('/teilatua', function () {
    return view('teilatua');
})->name('teilatua');


// Route::get('/perfil', function () {
//     return view('perfil');
// })->middleware(['auth', 'verified'])->name('perfil');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{profilaId}', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/jolasa/{partidaId}',  [PartidaController::class, 'jolasAzalpena'])->name('jolasa');
    Route::get('/partida/{partidaId}', [PartidaController::class, 'index'])->name('partida.index');
    Route::get('/hasiera/{partidaId}', [PartidaController::class, 'hasiera'])->name('hasiera');

    Route::put('/prueba3/{partidaId}', [PruebaController::class, 'prueba3'])->name('prueba3update');

});

Route::get('/partidas', [PartidaController::class, 'index'])->name('partida.index');

require __DIR__.'/auth.php';

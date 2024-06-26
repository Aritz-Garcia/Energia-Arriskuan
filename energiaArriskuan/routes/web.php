<?php

use App\Http\Controllers\PartidaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\EditarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::post('/kontaktuaEmail', [CorreoController::class, 'kontaktua'])->name('kontaktuaEmail');

Route::get('/klasifikazioa', [PartidaController::class, "klasifikazioa"])->name('klasifikazioa');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{profilaId}', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profileAdmin', [ProfileController::class, 'destroyAdmin'])->name('profile.destroyAdmin');
    Route::patch('/profileAdmin', [ProfileController::class, 'doAdmin'])->name('profile.doAdmin');
    Route::patch('/profileAdminDelete', [ProfileController::class, 'removeAdmin'])->name('profile.removeAdmin');

    Route::middleware('mugikorra')->group(function () {
        Route::get('/jolasa/{partidaId}',  [PartidaController::class, 'jolasAzalpena'])->name('jolasa');
        Route::get('/hasiera/{partidaId}', [PartidaController::class, 'hasiera'])->name('hasiera');
        Route::get('/biltegia/{partidaId}', [PartidaController::class, 'biltegia'])->name('biltegia');
        Route::get('/sotoa/{partidaId}', [PartidaController::class, 'sotoa'])->name('sotoa');
        Route::get('/patio/{partidaId}', [PartidaController::class, 'patio'])->name('patio');
        Route::get('/teilatua/{partidaId}', [PartidaController::class, 'teilatua'])->name('teilatua');
        Route::get('/klasea/{partidaId}', [PartidaController::class, 'klasea'])->name('klasea');
        Route::get('/denbora/{partidaId}/{lekua}/{denbora}', [PartidaController::class, 'pistaUpdate'])->name('pista');
    });

    Route::delete('/partida', [PartidaController::class, 'destroy'])->name('partida.destroy');

    Route::get('/prueba1/update/{partidaId}/{denbora}', [PruebaController::class, 'prueba1'])->name('prueba1.update');
    Route::get('/prueba2/update/{partidaId}/{denbora}', [PruebaController::class, 'prueba2'])->name('prueba2.update');
    Route::get('/prueba3/update/{partidaId}/{denbora}', [PruebaController::class, 'prueba3'])->name('prueba3.update');
    Route::get('/prueba4/update/{partidaId}/{denbora}', [PruebaController::class, 'prueba4'])->name('prueba4.update');
    Route::get('/prueba5/update/{partidaId}/{denbora}', [PruebaController::class, 'prueba5'])->name('prueba5.update');

    Route::get('/admin/{userId}', [AdminController::class, 'admin'])->name('admin');

    Route::get('/erabiltzaileakAdmin/{userId}', [AdminController::class, 'erabiltzaileakAdmin'])->name('erabiltzaileakAdmin');

    Route::get('/erabiltzaileakNormalak/{userId}', [AdminController::class, 'erabiltzaileakNormalak'])->name('erabiltzaileakNormalak');

    Route::get('/partidak/{userId}', [AdminController::class, 'partidak'])->name('partidak');

    Route::post('/denbora-gorde', [PartidaController::class, 'denboraGorde'])->name('denboraGorde');
    Route::post('/denbora-gorde-pista', [PartidaController::class, 'denboraGordePista'])->name('denboraGordePista');

    Route::get('/partida/gameOverUpdate/{partidaId}', [PartidaController::class, 'gameOverUpdate'])->name('gameOver');

    Route::get('/partida/gameOver/{partidaId}', [PartidaController::class, 'gameOverView'])->name('gameOverView');

    Route::get('/partida/irabaziUpdate/{partidaId}/{denbora}', [PartidaController::class, 'irabaziUpdate'])->name('irabazi');

    Route::get('/partida/irabazi/{partidaId}', [PartidaController::class, 'irabaziView'])->name('irabaziView');

});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HorasController;
use App\Http\Controllers\InicioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asignatura', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignatura');
Route::get('/asignatura/crear', [AsignaturaController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/asignatura/crear',  [AsignaturaController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/asignatura/ver/{codAs}', [AsignaturaController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/asignatura/editar/{codAs}', [AsignaturaController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('/asignatura/editar/{codAs}',  [AsignaturaController::class, 'update'])->middleware(['auth', 'verified']);
Route::get('/asignatura/eliminar/{codAs}', [AsignaturaController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::get('/horas', [HorasController::class, 'index'])->middleware(['auth', 'verified'])->name('horas');
Route::get('/horas/crear', [HorasController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/horas/crear',  [HorasController::class, 'store'])->middleware(['auth', 'verified']);
Route::get("/horas/delete/{codAs}/{diaH}/{horaH}", [HorasController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [InicioController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

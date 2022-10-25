<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\VilleController;

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

Route::get('/', [ EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/home', [ EtudiantController::class, 'index'])->name('etudiant.index');

Route::get('/etudiant/{etudiant}', [ EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant-create', [ EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant-create', [ EtudiantController::class, 'store'])->name('etudiant.store');

Route::get('/etudiant-edit/{etudiant}', [ EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant-edit/{etudiant}', [ EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('/etudiant-edit/{etudiant}', [ EtudiantController::class, 'destroy'])->name('etudiant.destroy');

Route::get('/ville', [ VilleController::class, 'index'])->name('ville.index');
Route::get('/ville/{ville}', [ VilleController::class, 'show'])->name('ville.show');
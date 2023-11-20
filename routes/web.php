<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
uSE App\Http\Controllers\EvenementController;
uSE App\Http\Controllers\BilletController;

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

Route::get('/',[HomeController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//EVENEMENT
Route::get('create-evenement',[EvenementController::class, 'create'])->name('agence.create-evenement');
Route::post('/ajouter/traitement',[EvenementController::class, 'ajouter_traitement']);

Route::get('evenement',[EvenementController::class, 'evenement'])->name('agence.evenement');

Route::get('/update-evenement/{id}',[EvenementController::class, 'update_evenement'])->name('agence.update');
Route::post('/update-evenement/traitement',[EvenementController::class, 'update_evenement_traitement']);

Route::get('/delete-evenement/{id}',[EvenementController::class, 'delete_evenement']);
//BILLET
Route::get('billet',[BilletController::class, 'liste_billet'])->name('billet.liste');
Route::get('create-billet',[BilletController::class, 'ajout_billet'])->name('billet.ajout');
Route::post('ajout_billet/traitement',[BilletController::class, 'ajout_traitement_billet']);
Route::get('/update-billet/{id}',[BilletController::class, 'update_billet'])->name('billet.update');
Route::post('/update-billet/traitement',[BilletController::class, 'update_billet_traitement']);
Route::get('/delete-billet/{id}',[BilletController::class, 'delete_billet']);

require __DIR__.'/auth.php';

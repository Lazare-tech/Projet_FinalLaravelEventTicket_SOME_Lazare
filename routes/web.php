<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
uSE App\Http\Controllers\EvenementController;
uSE App\Http\Controllers\BilletController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AgenceController;

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
Route::get('/detail-evenement/{id}',[BilletController::class, 'detail_evenement'])->name('detail');
Route::get('/acheter-billet/{id}/',[BilletController::class, 'acheter_billet'])->name('biller.acheter');
Route::post('/evenement/payer/',[BilletController::class, 'payer'])->name('evenement.payer');

//MENU
Route::get('/contact',[MenuController::class, 'contact'])->name('menu.contact');
Route::get('/faq',[MenuController::class, 'faq'])->name('menu.faq');
Route::get('/apropos',[MenuController::class, 'apropos'])->name('menu.apropos');
//AGENCE
Route::get('/liste-agence',[AgenceController::class, 'agence'])->name('agence.liste-agence');

Route::get('/create-agence',[AgenceController::class, 'create_agence'])->name('agence.create-agence');
Route::post('/create-agence/traitement',[AgenceController::class, 'create_agence_traitement'])->name('agence.create-agence-traitement');

Route::get('/update-agence/{id}',[AgenceController::class, 'update_agence'])->name('agence.update');
Route::post('/update-agence/traitement',[AgenceController::class, 'update_agence_traitement']);
Route::get('/delete-agence/{id}',[AgenceController::class, 'delete_agence']);


require __DIR__.'/auth.php';

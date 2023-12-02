<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('agence', 'AgenceCrudController');
    Route::crud('billet', 'BilletCrudController');
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('commande', 'CommandeCrudController');
    Route::crud('commande-billet', 'CommandeBilletCrudController');
    Route::crud('commentaire', 'CommentaireCrudController');
    Route::crud('etat', 'EtatCrudController');
    Route::crud('evenement', 'EvenementCrudController');
    Route::crud('facture', 'FactureCrudController');
    Route::crud('role', 'RoleCrudController');
    Route::crud('timezone', 'TimezoneCrudController');
    Route::crud('typebillet', 'TypebilletCrudController');
    Route::crud('contact-controller', 'ContactControllerCrudController');
    Route::crud('contact', 'ContactCrudController');
}); // this should be the absolute last line of this file
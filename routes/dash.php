<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dash Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Dash routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Dash" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {


    Route::get('/dash', [Home::class, 'dashboard'])->name('dash.default');

    //    Product CRUD Routing

    Route::get('dash/list-produit', [ProduitController::class, 'index'])
        ->name('produit.index');

    Route::get('dash/ajouter-produit', [ProduitController::class, 'create'])
        ->name('produit.create');

    Route::post('dash/ajouter-produit', [ProduitController::class, 'store'])
        ->name('produit.store');

    Route::get('dash/editer-produit/{produit}', [ProduitController::class, 'edit'])
        ->name('produit.edit');

    Route::post('dash/editer-produit/{produit}', [ProduitController::class, 'update'])
        ->name('produit.update');

    Route::post('dash/supprimer-produit', [ProduitController::class, 'destroy'])
        ->name('produit.destroy');

    //    Annonce CRUD Routing

    Route::get('dash/list-annonce', [AnnonceController::class, 'index'])
        ->name('annonce.index');

    Route::get('dash/ajouter-annonce', [AnnonceController::class, 'create'])
        ->name('annonce.create');

    Route::post('dash/ajouter-annonce', [AnnonceController::class, 'store'])
        ->name('annonce.store');

    Route::get('dash/editer-annonce/{annonce}', [AnnonceController::class, 'edit'])
        ->name('annonce.edit');

    Route::post('dash/editer-annonce/{annonce}', [AnnonceController::class, 'update'])
        ->name('annonce.update');

    Route::post('dash/supprimer-annonce', [AnnonceController::class, 'destroy'])
        ->name('annonce.destroy');

    //    Annonce CRUD Routing

    Route::get('dash/list-category', [CategoryController::class, 'index'])
        ->name('category.index');

    Route::get('dash/ajouter-category', [CategoryController::class, 'create'])
        ->name('category.create');

    Route::post('dash/ajouter-category', [CategoryController::class, 'store'])
        ->name('category.store');

    Route::get('dash/editer-category/{category}', [CategoryController::class, 'edit'])
        ->name('category.edit');

    Route::post('dash/editer-category/{category}', [CategoryController::class, 'update'])
        ->name('category.update');

    Route::post('dash/supprimer-category', [CategoryController::class, 'destroy'])
        ->name('category.destroy');
});
<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/product/{produit}/{title}', [ProduitController::class, 'show'])->name('product');
Route::post('/product/{produit}', [ProduitController::class, 'review'])->name('product.review');
Route::get('/votre-panier', [Home::class, 'cart'])->name('cart');
Route::get('/votre-list-de-preference', [Home::class, 'wishlist'])->name('wishlist');
Route::get('/effectuer-votre-payement', [Home::class, 'shipping'])->name('shipping');

require __DIR__ . '/dash.php';
require __DIR__ . '/auth.php';

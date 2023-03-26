<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

/* main pages */
Route::get('/', [MainController::class,"HomePage"]);
Route::get('/about',[MainController::class, "About"]);
Route::get('/contact',[MainController::class, "Contact"]);

/* client pages */
Route::get('/marques',[MainController::class,"Marques"]);
Route::get('/tracking',[MainController::class,"Tracking"]);
Route::get('/garantie',[MainController::class,"Warranty"]);

/* product pages */
Route::get('/produits', [ProductController::class,"ProductList"]);
Route::get('/produits/{id}', [ProductController::class,"showProduct"]);
Route::get('/cart', [ProductController::class,"cart"]);

/* admin pages */
Route::get('/authentification',[AdminController::class,"login"]);
Route::post('/authentification',[AdminController::class,"authenticate"]);
Route::post('/logout',[AdminController::class,"logout"]);
Route::get('/admin/dashboard',[AdminController::class,"dashboard"]);

//utilisateurs -------------------------------------
Route::get('/admin/utilisateurs',[AdminController::class,"users"]);
Route::post('/admin/utilisateurs',[AdminController::class,"add_user"]);
Route::put('/admin/utilisateurs/{user}',[AdminController::class,"edit_user"]);
Route::delete('/admin/utilisateurs/{user}',[AdminController::class,"delete_user"]);

// produits ------------------------------------- 
Route::get('/admin/ajout-produit',[AdminController::class, "addProduct"]);
Route::get('/admin/liste-produits',[AdminController::class, "ProductList"]);

// catégories ------------------------------------- 
Route::get('/admin/categories',[AdminController::class, "Categories"]);
Route::get('/admin/categories/{id}',[AdminController::class, "Subcategories"]);

// marques ------------------------------------- 
Route::get('/admin/marques',[AdminController::class, "Brands"]);

// commandes ------------------------------------- 
Route::get('/admin/commandes',[AdminController::class, "Orders"]);
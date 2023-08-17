<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WilayaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', [MainController::class, "HomePage"]);
Route::get('/about', [MainController::class, "About"]);
Route::get('/contact', [MainController::class, "Contact"]);
Route::post('/contact',[MainController::class, 'SendContactMail'])->name('send-contact-mail');

/* client pages */
Route::get('/marques', [MainController::class, "Marques"]);
Route::get('/garantie', [MainController::class, "Warranty"]);

/* product pages */
Route::get('/produits', [ProductController::class, "ProductList"])->name('products-display');
Route::get('/produits/{product}', [ProductController::class, "showProduct"]);

/* cart pages */
Route::get('/cart', [CartController::class, "cart"]);
Route::post('/cart/ajouter-produit', [CartController::class, 'addItem'])->name('addToCart');
Route::post('/cart/supprimer-produit', [CartController::class, 'removeItem'])->name('removeFromCart');
Route::post('/cart/changer-quantity', [CartController::class, 'changeQuantity'])->name('changeCartQuantity');
Route::post('/cart/vider-panier', [CartController::class, 'emptyCart'])->name('emptyCart');
Route::post('/getDeliveryPrice', [CartController::class, 'deliveryPrice'])->name('deliveryPrice');
Route::post('/removeDeliveryPrice', [CartController::class, 'removeDeliveryPrice']);
Route::get('/tracking', [OrderController::class, "Tracking"])->name('order-tracking');
Route::post('/tracking', [OrderController::class, "Track_orders"])->name('order-list');
Route::post('/cart/commande', [OrderController::class, "Add_order"])->name('send_order');


/* admin pages */
Route::get('/admin/dashboard', [AdminController::class, "login"])->name('login');
Route::post('/admin/dashboard', [AdminController::class, "authenticate"]);
Route::post('/logout', [AdminController::class, "logout"]);

Route::middleware(['auth'])->group(function () {
    //utilisateurs -------------------------------------
    Route::get('/admin/utilisateurs', [AdminController::class, "users"]);
    Route::post('/admin/utilisateurs', [AdminController::class, "add_user"]);
    Route::put('/admin/utilisateurs/{user}', [AdminController::class, "edit_user"]);
    Route::delete('/admin/utilisateurs/{user}', [AdminController::class, "delete_user"]);

    // produits ------------------------------------- 
    Route::get('/admin/ajout-produit', [ProductController::class, "showProductForm"]);
    Route::post('/admin/ajout-produit', [ProductController::class, "addProduct"]);
    Route::get('/get-subcategories/{category}', [ProductController::class, "getSubcategories"]);
    Route::get('/get-finalcategories/{subcategory}', [ProductController::class, "getFinalcategories"]);
    Route::post('/feature-product/{product}', [ProductController::class, 'featureProduct']);
    Route::post('/offer-product/{product}', [ProductController::class, 'productOffer']);
    Route::get('/admin/liste-produits', [ProductController::class, "AdminProductList"]);
    Route::put('/admin/liste-produits/promotion/{product}', [ProductController::class, "AddOffer"]);
    Route::get('/admin/modifier-produit/{product}', [ProductController::class, "showEditForm"]);
    Route::put('/admin/liste-produits/{product}', [ProductController::class, "editProduct"]);
    Route::delete('/admin/liste-produits/{product}', [ProductController::class, "deleteProduct"]);

    // catégories ------------------------------------- 
    Route::get('/admin/categories', [CategoryController::class, "Categories"]);
    Route::post('/admin/categories', [CategoryController::class, "add_category"]);
    Route::put('/admin/categories/{category}', [CategoryController::class, "edit_category"]);
    Route::delete('/admin/categories/{category}', [CategoryController::class, "delete_category"]);

    Route::get('/admin/categories/{category}', [CategoryController::class, "Subcategories"]);
    Route::post('/admin/subcategories', [CategoryController::class, "add_subcategory"]);
    Route::put('/admin/subcategories/{subcategory}', [CategoryController::class, "edit_subcategory"]);
    Route::delete('/admin/subcategories/{subcategory}', [CategoryController::class, "delete_subcategory"]);
    
    Route::get('/admin/subcategories/{subcategory}', [CategoryController::class, "FinalCategories"]);
    Route::post('/admin/finalcategories', [CategoryController::class, "add_finalcategory"]);
    Route::put('/admin/finalcategories/{finalcategory}', [CategoryController::class, "edit_finalcategory"]);
    Route::delete('/admin/finalcategories/{finalcategory}', [CategoryController::class, "delete_finalcategory"]);

    // marques ------------------------------------- 
    Route::get('/admin/marques', [BrandController::class, "Brands"]);
    Route::post('/admin/marques', [BrandController::class, "add_brand"]);
    Route::put('/admin/marques/{brand}', [BrandController::class, "edit_brand"]);
    Route::delete('/admin/marques/{brand}', [BrandController::class, "delete_brand"]);

    // wilayas ------------------------------------- 
    Route::get('/admin/wilayas', [WilayaController::class, "wilayas"]);
    Route::post('/admin/wilayas', [WilayaController::class, "add_wilaya"]);
    Route::put('/admin/wilayas/{wilaya}', [WilayaController::class, "edit_wilaya"]);
    Route::delete('/admin/wilayas/{wilaya}', [WilayaController::class, "delete_wilaya"]);

    // commandes ------------------------------------- 
    Route::get('/admin/commandes', [OrderController::class, "Orders"])->name('orders-admin');
    Route::put('/admin/commandes/{order}', [OrderController::class, "edit_order"]);
    Route::delete('/admin/commandes/{order}', [OrderController::class, "delete_order"]);
    Route::post('/admin/commandes/statut/{order}', [OrderController::class, "change_status"])->name('changeStatus');

    //media
    Route::post('media/product-images', [ProductController::class, 'product_images'])->name('storeProductImages');
});
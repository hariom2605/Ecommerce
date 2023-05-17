<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
//use Illuminate\Support\Facades\URL;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[BaseController::class,'home']);
Route::get("/home",[BaseController::class,'home'])->name('home');
Route::get("/specialoffer",[BaseController::class,'specialoffer'])->name('specialoffer');
Route::get("/deliver",[BaseController::class,'deliver'])->name('deliver');
Route::get("/contact",[BaseController::class,'contact'])->name('contact');
Route::get("/cart",[BaseController::class,'cart'])->name('cart');
Route::get("/productview",[BaseController::class,'productview'])->name('productview');

//admin section//
Route::get("/admin/login",[AdminController::class,'login'])->name('admin.login');
// end admin section//
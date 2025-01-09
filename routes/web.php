<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', function () { return view('welcome');});


/* debut des routes pour le home page*/
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('a-propos', [HomeController::class, 'about'])->name('a-propos');
Route::get('service', [HomeController::class, 'services'])->name('services');
Route::get('contact', [HomeController::class, 'contact'])->name('contact-us');

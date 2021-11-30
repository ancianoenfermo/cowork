<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', [homeController::class,'index'])->name('home');
Route::post('/', [homeController::class,'store'])->name('home.store');

Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

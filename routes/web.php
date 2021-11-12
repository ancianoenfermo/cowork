<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
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

Route::get('/', HomeController::class)->name('home');
Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');

Route::get('/mailable/contact', function() {
    return new ContactanosMailable("Carlos Martí","carlos.marti@me.com", "607194525", "este es el cuerpo del mensaje");
});
Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

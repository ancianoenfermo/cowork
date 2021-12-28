<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactanosController;

use Illuminate\Support\Facades\Mail;
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

Route::get('/', [homeController::class,'index'])->name('home');
Route::post('/', [homeController::class,'store'])->name('home.store');

Route::get('contactanos',function() {
    $correo = new ContactanosMailable("carlos","Mi correo","221241","mi mensaje");
    Mail::to("carlos.marti.mallen@gmai.com")->send($correo);
});


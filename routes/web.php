<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/',[controladorVistas::class,'showWelcome']);

Route::get('Home',[controladorVistas::class,'showHome'])->name('ApodoHome');
|
*/



Route::get('/',[controladorVistas::class,'showHome'])->name('ApodoHome');
Route::get('/',[controladorBD::class,'create'])->name('contacto.create');



Route::get('Contacto',[controladorBD::class,'index'])->name('contacto.index');

Route::get('contacto/{id}/edit',[controladorBD::class,'edit'])->name('contacto.edit');

//store
Route::post('contacto', [controladorBD::class,'store'])->name('contacto.store');

Route::put('contacto/{id}',[controladorBD::class,'update'])->name('contacto.update');


Route::get('contacto/{id}/show',[controladorBD::class,'show'])->name('contacto.show');

Route::delete('contacto/{id}',[controladorBD::class,'destroy'])->name('contacto.destroy');

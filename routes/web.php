<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PaysController;
use App\Http\Controllers\EntrepriseController;

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

Route::get('/',[EntrepriseController::class,'index'])->name('entreprises.liste');
Route::get('entreprises',[EntrepriseController::class,'index']);
Route::get('entreprises/create',[EntrepriseController::class,'create']);
Route::post('entreprises/store',[EntrepriseController::class,'store']);
Route::get('entreprises/{entreprise}',[EntrepriseController::class,'show'])->name('entreprises.show');
Route::get('entreprises/delete/{entreprise}',[EntrepriseController::class,'delete'])->name('entreprises.delete');
Route::get('entreprises/quartier/{id}',[EntrepriseController::class,'show_related']);



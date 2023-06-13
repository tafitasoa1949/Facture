<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Home::class,'index'])->name('index');
Route::get('/listclient',[ClientController::class,'listclient'])->name('listclient');
Route::get('/ajoutclient',[ClientController::class,'ajouter']);
Route::get('facture/{id}',[FactureController::class,'index'])->name('facture');
Route::get('/validation',[FactureController::class,'validation']);
Route::post('/accepter', [FactureController::class, 'processForm'])->name('accepter');
Route::get('/listfacture',[FactureController::class,'listfacture'])->name('listfacture');
Route::get('detail/{idfacture}',[FactureController::class,'detail'])->name('detail');
Route::get('/recherche',[FactureController::class,'search'])->name('search');
Route::get('/grandlivre',[FactureController::class,'grand_livre'])->name('grand_livre');
Route::get('/etatfinanciere',[FactureController::class,'etat_financiere'])->name('etat_financiere');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NveController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ApprenantController;

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



Route::get("/",[AccueilController::class, "index"])->name("accueil.index");


Route::get("/apprenant",[ApprenantController::class, "index"])->name("apprenants.index");
Route::get("/editer/{apprenant}",[ApprenantController::class, "edit"])->name("apprenants.editer");
Route::get("/supprimer/{apprenant}",[ApprenantController::class, "destroy"])->name("apprenants.supprimer");
Route::get("/detail/{apprenant}",[ApprenantController::class, "show"])->name("apprenants.detail");
Route::put("/modifier/{apprenant}",[ApprenantController::class, "update"])->name("apprenants.modifier");
Route::get("/ajouter",[ApprenantController::class, "create"])->name("apprenants.form");
Route::post("/create",[ApprenantController::class, "store"])->name("apprenants.ajouter");


Route::get("/modules",[ModuleController::class, "index"])->name("module.index");
Route::get('/ajouter_module',[ModuleController:: class, "create"])->name("module.form");
Route::get("/editer_module/{module}" , [ModuleController::class, "edit"])->name("module.edit");
Route::get('/detail_module/{module}',[ModuleController::class,"show"])->name("module.show");
Route::put("/editer_module_traitement/{module}" , [ModuleController::class, "update"])->name("module.update");
Route::get("/supprimer_module/{module}",[ModuleController::class, "destroy"])->name("module.destroy");
Route::post('/create_module',[ModuleController::class, "store"])->name("module.store");


Route::get("/nves",[NveController::class, "index"])->name("nve.index");
Route::get('/ajouter_nve',[NveController:: class, "create"])->name("nve.form");
Route::get("/editer_nve/{nve}" , [NveController::class, "edit"])->name("nve.editer");
Route::get('/detail_nve/{nve}',[NveController::class,"show"])->name("nve.show");
Route::put("/update/{nve}" , [NveController::class, "update"])->name("nve.update");
Route::get("/supprimer_nve/{nve}",[NveController::class, "destroy"])->name("nve.destroy");
Route::post('/create_nve',[NveController::class, "store"])->name("nve.store");




Route::get("/paiements",[PaiementController::class, "index"])->name("paiement.index");
Route::get('/ajouter_paiement',[PaiementController:: class, "create"])->name("paiement.form");
Route::get("/editer_paiement/{paiement}" , [PaiementController::class, "edit"])->name("paiement.editer");
Route::get('/detail_paiement/{paiement}',[PaiementController::class,"show"])->name("paiement.show");
Route::put("/update_payment/{paiement}" , [PaiementController::class, "update"])->name("paiement.update");
Route::get("/supprimer_paiement/{paiement}",[PaiementController::class, "destroy"])->name("paiement.destroy");
Route::post('/create_paiement',[PaiementController::class, "store"])->name("paiement.store");








<?php

use App\Http\Controllers\ArmyCorpController;
use App\Http\Controllers\BarracksController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoldierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/formulariocuerpoejercito',[ArmyCorpController::class,'create']);
Route::post('/storecuerpoejercito',[ArmyCorpController::class,'store'])->name('cejercito.store');


Route::get('/formulariocuartel',[BarracksController::class,'create']);
Route::post('/storecuartel',[BarracksController::class,'store'])->name('barracks.store');


Route::get('/formulariocompañia',[CompanyController::class,'create']);
Route::post('/storecompañia',[CompanyController::class,'store'])->name('company.store');


Route::get('/formularioservicio',[ServiceController::class,'create']);
Route::post('/storeservicio',[ServiceController::class,'store'])->name('service.store');


Route::get('/formulariosoldado',[SoldierController::class,'create']);
Route::post('/storesoldado',[SoldierController::class,'store'])->name('soldier.store');


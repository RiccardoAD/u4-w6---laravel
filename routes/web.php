<?php
use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;



Route::get('/list', [ ActivitiesController::class ,'index' ] )->name('index');
Route::get('/details/{id}', [ ActivitiesController::class ,'details' ] )->name('details');
Route::get('/modify', [ ActivitiesController::class ,'modify' ] )->name('modify');
Route::get('/create', [ ActivitiesController::class ,' create' ] )->name('create');

// serve per creare link a cui aggrapparsi che restaerea invisibile agli utenti
// serve per creare link a cui aggrapparsi che restaerea invisibile agli utenti
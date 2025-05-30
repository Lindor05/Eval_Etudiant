<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('etudiants', EtudiantController::class);
    Route::resource('evaluations', EvaluationController::class);
    Route::resource('notes', NoteController::class);
});

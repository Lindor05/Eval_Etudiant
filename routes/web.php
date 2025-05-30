<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\NoteController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\Admin\DashboardController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('etudiants', EtudiantController::class);
    Route::resource('evaluations', EvaluationController::class);
    Route::resource('notes', NoteController::class);
});
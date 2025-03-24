<?php

use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::controller(PersonalController::class)->group(function() {
    Route::get('/personal', 'index')->name('personal.index');
    Route::get('/personal/create', 'create')->name("personal.create");
    Route::get('/personal/{id}', 'show')->name('personal.show');
    Route::post('/personal', 'store')->name('personal.store');
    Route::delete('personal/{personal}', 'destroy')->name('personal.destroy');
}); */

Route::resource('personal', PersonalController::class)->parameters(['personal' => 'id']);

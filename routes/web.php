<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('home');
})->name('home');

/* Route::controller(PersonalController::class)->group(function() {
    Route::get('/personal', 'index')->name('personal.index');
    Route::get('/personal/create', 'create')->name("personal.create");
    Route::get('/personal/{id}', 'show')->name('personal.show');
    Route::post('/personal', 'store')->name('personal.store');
    Route::delete('personal/{personal}', 'destroy')->name('personal.destroy');
}); */

Route::resource('personal', PersonalController::class);

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

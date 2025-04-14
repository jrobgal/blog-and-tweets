<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
//use App\Exceptions\InvalidEntrySlugException;

Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])/*function () {
    return view('welcome');
})*/;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entries/create', [App\Http\Controllers\EntryController::class, 'create']);

Route::post('/entries', [App\Http\Controllers\EntryController::class, 'store']);

Route::get('/entries/{entryBySlug}', [App\Http\Controllers\GuestController::class, 'show']);

Route::get('/entries/{entry}/edit', [App\Http\Controllers\EntryController::class, 'edit']);

Route::put('/entries/{entry}', [App\Http\Controllers\EntryController::class, 'update']);

Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show']);

/*Route::get('exception', function () {
    throw new InvalidEntrySlugException();
});*/
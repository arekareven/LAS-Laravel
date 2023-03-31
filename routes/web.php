<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('layout.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('application', ApplicationController::class);
    Route::resource('character', CharacterController::class);

    Route::get('applicationcreate/{id}', [ApplicationController::class, 'create']);
    Route::get('applicationlist/{id}', [ApplicationController::class, 'show']);
    Route::get('characterlist/{id}', [CharacterController::class, 'index']);

});

require __DIR__.'/auth.php';


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    RoleController,
    UserController
};
use App\Http\Controllers\Dashboard\{
    DashboardController,
    ProfileController
};
use App\Http\Controllers\EnamC\{
   ApplicationController,
    CapacityController,
    CharacterController,
   CustomerController,
   EnamC,
};

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
    Route::resource('capacity', CapacityController::class);

    Route::get('applicationcreate/{id}', [ApplicationController::class, 'create']);
    Route::get('applicationlist/{id}', [ApplicationController::class, 'show']);
    Route::get('characterlist/{id}', [CharacterController::class, 'index']);
    Route::get('enamc/{id}', [EnamC::class, 'index']);

});

require __DIR__.'/auth.php';


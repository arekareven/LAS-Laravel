<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MateController;
use App\Http\Controllers\RelativesController;
use App\Http\Controllers\ApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('layout.master');
});

Route::resources([
    'customer' => CustomerController::class,
    'mate' => MateController::class,
    'relatives' => RelativesController::class,
    'application'=> ApplicationController::class,
]);

Route::get('/applicationlist/{id?}', [ApplicationController::class, 'applicationList'])->name('application.list');

Route::get('cekid/{id}', function ($id) {
    return "Hello, ini adalah id anda ".$id;
    })->name('cek.id');





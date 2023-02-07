<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Background\CustomerController;
use App\Http\Controllers\Background\MateController;
use App\Http\Controllers\Background\RelativesController;
use App\Http\Controllers\Background\ApplicationController;

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
    return view('layout.dashboard');
});

Route::resources([
    'customer' => CustomerController::class,
    'mate' => MateController::class,
    'relatives' => RelativesController::class,
    'application'=> ApplicationController::class,
]);




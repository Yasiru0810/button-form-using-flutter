<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use Illuminate\Support\Facades\Http;


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
    return view('welcome');
});


// Route::get('/Customer',[customerController::class,'index']);
// Route::post('/create',[customerController::class,'create']);
// Route::get('/edit',[customerController::class,'edit']);
// Route::get('/Customer/{id}',[customerController::class,'show']);









Route::resource('Customer',customerController::class);
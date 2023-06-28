<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirstController;
use App\Http\Controllers\ComponentController; 

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

Route::get('/first', [FirstController::class, 'index']);   
Route::get('/components', [ComponentController::class, 'index'])->name('index');  
Route::get('/components/{component}', [ComponentController::class,'show'])->name('show');

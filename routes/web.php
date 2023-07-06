<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ComponentController; 
use App\Http\Controllers\BookmarkController; 
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/first', [FirstController::class, 'index'])->name('first');  

Route::group(['middleware' => ['auth']], function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/components', [ComponentController::class, 'index'])->name('index');  
    Route::get('/components/{component}', [ComponentController::class,'show'])->name('show');
    Route::post('/components/{component}/book', [BookmarkController::class,'book'])->name('book');
    Route::get('/bookmark', [BookmarkController::class,'bookmark'])->name('bookmark');
    Route::get('/posts', [PostController::class, 'post'])->name('post');
    Route::post('/posts', [PostController::class, 'store'])->name('store');
});

require __DIR__.'/auth.php';

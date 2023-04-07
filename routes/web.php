<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[\App\Http\Controllers\MyController::class,"home"])->name("homepage");
Route::get('/about',[\App\Http\Controllers\MyController::class,"about"])->name("about");
Route::get('/contact',[\App\Http\Controllers\MyController::class,"contact"])->name("contact");
Route::post('/subscribe',[\App\Http\Controllers\MyController::class,"subscription"])->name("subscribe");
Route::post('/contact',[\App\Http\Controllers\MyController::class,"contact_form"])->name("contact_form");
//Route::get("/myregister",[\App\Http\Controllers\MyController::class,"myregister"])->name("myregister");
//Route::get("/mylogin",[\App\Http\Controllers\MyController::class,"mylogin"])->name("mylogin");
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

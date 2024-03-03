<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AllergenenController;
use App\Http\Controllers\LeverantieController;
use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\ProductenController;
use App\Http\Controllers\LeveringController;

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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('overzicht', [ProductController::class, 'index'])->name('overzicht');

Route::get('leverancier', [LeverancierController::class, 'index'])->name('leverancier');

Route::get('leverancier/{id}', [ProductenController::class, 'index'])->name('leverancier.producten');

Route::get('/levering/create/{id}', [LeveringController::class, 'index'])->name('levering.create');

Route::post('/levering/store/{id}', [LeveringController::class, 'store'])->name('levering.store');

Route::get('allergenen/{id}', [AllergenenController::class, 'show'])->name('allergenen.show');

Route::get('leverantie/{id}', [LeverantieController::class, 'show'])->name('leverantie.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

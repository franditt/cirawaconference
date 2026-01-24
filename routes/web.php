<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbstractSubmissionController;
use App\Http\Controllers\RegisterController;

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

Route::get('/workshop', function () {
    return view('workshop');
});

Route::post('/abstracts/submit', [AbstractSubmissionController::class, 'store'])->name('abstracts.submit');
Route::post('/workshop/submit', [AbstractSubmissionController::class, 'storeWorkshop'])->name('workshop.submit');

// Registration routes
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register/success', [RegisterController::class, 'success'])->name('register.success');

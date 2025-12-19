<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbstractSubmissionController;

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

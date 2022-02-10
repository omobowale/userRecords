<?php

use App\Http\Controllers\CitizenController;
use App\Http\Controllers\CitizenReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/citizen_registration', [CitizenController::class, 'index'])->middleware(['auth'])->name('citizen_registration');

Route::get('/citizen_report', [CitizenReportController::class, 'index'])->middleware(['auth'])->name('citizen_report');

// Route::get('/citizen_registration', function () {
//     return view('citizen_registration');
// })->middleware(['auth'])->name('citizen_registration');

require __DIR__.'/auth.php';

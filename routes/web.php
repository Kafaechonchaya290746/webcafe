<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\LineController;

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

Route::get('/admin/register', [AdminRegisterController::class, 'showForm']);
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');

// Line Login Routes
Route::prefix('line')->name('line.')->group(function () {
    // Line Login Routes (ไม่ใช้ prefix)
    Route::get('/Line/login', [LineController::class, 'redirectToLine'])->name('line.LineLogin');
    Route::get('/Line/Callback', [LineController::class, 'handleLineCallback'])->name('line.LineCallback');
    // Route::get('login/line', [LineController::class, 'redirectToLine']);

});

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
Route::prefix('Line')->group(function () {
    Route::get('/Login', [LineController::class, 'redirectToLine'])->name('LineLogin');
    Route::get('/Callback', [LineController::class, 'handleLineCallback'])->name('LineCallback');
    Route::get('login/line', [LineController::class, 'redirectToLine']);

});
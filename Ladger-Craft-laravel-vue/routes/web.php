<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/statistic', [HomeController::class, 'showStatistic']);
Route::get('/order', [HomeController::class, 'showOrderMake']);
Route::get('/catalog', [HomeController::class, 'showCatalog']);
Route::get('/history', [HomeController::class, 'showHistory']);

<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [FrontendController::class, 'index'])->name('index');
Route::get('/create', [FrontendController::class, 'create'])->name('create');
Route::get('/list', [FrontendController::class, 'list'])->name('list');
Route::post('/saveDetail', [FrontendController::class, 'saveDetail'])->name('saveDetail');

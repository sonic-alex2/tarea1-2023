<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

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
Route::resource('queries', QueryController::class)->names('queries')->middleware('auth');

Route::get('queries/descargar/{query}', [App\Http\Controllers\QueryController::class, 'download'])->name('queries.download');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

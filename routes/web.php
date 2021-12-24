<?php

use App\Http\Controllers\HalamanController;
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

Route::get('/dashboard', HalamanController::class, "basic")->name('dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/{any?}', function () {
//     return view('layouts.app');
// });
Route::get('/', HalamanController::class, "homepage")->name("homepage");
Route::get('{path}', HalamanController::class)->where('path', '(.*)')->name("notFound");

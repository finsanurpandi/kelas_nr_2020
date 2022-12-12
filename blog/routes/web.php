<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', [TestController::class, 'index']);
Route::get('/hello', [TestController::class, 'hello']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::group([
        'middleware' => 'role:lecture',
        'prefix' => 'lecture',
        'as' => 'lecture.'
    ], function() {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'lecture'])->name('home');
    });

    Route::group([
        'middleware' => 'role:student',
        'prefix' => 'student',
        'as' => 'student.'
    ], function() {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'student'])->name('home');
    });
});
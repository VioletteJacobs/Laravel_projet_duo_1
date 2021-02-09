<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ResiController;
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

Route::get('/', [ResiController::class, 'index']);
Route::get('/contact', [ResiController::class, 'contact']);
Route::get('/articles', [ResiController::class, 'articles']);


Route::get('/backoffice', [BackofficeController::class, 'indexBack']);


Route::post('store_li', [BackofficeController::class,'liStore']);


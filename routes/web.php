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
Route::get('/backarticle', [BackofficeController::class, 'indexBackArticle']);
Route::get('/backcontact', [BackofficeController::class, 'indexBackContact']);
Route::get('/show_article/{id}', [BackofficeController::class, 'show']);



Route::post('store_li', [BackofficeController::class,'liStore']);
Route::post('/store_article', [BackofficeController::class,'articleStore']);
Route::post('/store_adress', [BackofficeController::class,'adressStore']);
Route::post('/store_mail', [BackofficeController::class,'mailStore']);
Route::post('/store_phone', [BackofficeController::class,'phoneStore']);
Route::post('/delete_articles/{id}', [BackofficeController::class,'destroy']);
Route::post('/delete_li/{id}', [BackofficeController::class,'destroyLi']);
Route::post('/delete_adress/{id}', [BackofficeController::class,'destroyadress']);
Route::post('/delete_mail/{id}', [BackofficeController::class,'destroymail']);
Route::post('/delete_phone/{id}', [BackofficeController::class,'destroyphone']);
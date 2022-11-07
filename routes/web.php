<?php

use App\Http\Controllers\ProductController; //Path untuk akses product controller
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', [ProductController::class, 'index']);
Route::get('/sport', [ProductController::class, 'sport']);
Route::get('/suv', [ProductController::class, 'suv']);
Route::get('/mpv', [ProductController::class, 'mpv']);
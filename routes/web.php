<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RianController;

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
Route::get('/',[RianController::class, 'home']);
Route::get('/category',[RianController::class, 'category']);
Route::get('/user',[RianController::class,'user']);
Route::get('/blog',[RianController::class, 'blog']);
Route::get('/login',[RianController::class,'login']);
//singgle route
//short by route
Route::get('/shortby_category/{slug:slug}',[RianController::class, 'shortby_category']);


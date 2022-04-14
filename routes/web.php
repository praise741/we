<?php

use App\Http\Controllers\frontendcontroller;
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

Route::get('/details/{id}', [frontendcontroller::class, 'details']);
Route::post('/search',[frontendcontroller::class, 'search'] );

Route::get('/', [frontendcontroller::class, 'index']);
Route::get('/genre/{genre}', [frontendcontroller::class, 'genre']);


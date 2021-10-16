<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PersensiController;

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
Route::get('/', [MembersController::class, 'index']);
Route::get('/create', [MembersController::class, 'create']);
Route::post('/', [MembersController::class, 'store']);//INSERT DATA

Route::get('/persensi',[PersensiController::class, 'index']);
Route::get('/{id}/delete', [MembersController::class, 'delete']);

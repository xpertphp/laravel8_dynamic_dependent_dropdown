<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DropdownController;
 

Route::get('dropdown',[DropdownController::class, 'index']);
Route::get('getState',[DropdownController::class, 'getState'])->name('getState');
Route::get('getCity',[DropdownController::class, 'getCity'])->name('getCity');

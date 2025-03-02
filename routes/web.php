<?php

use App\Http\Controllers\UserConroller;
use Illuminate\Support\Facades\Route;

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


Route::post('/import-excel',[UserConroller::class,'import'])->name('upload.file');
Route::get('/export-excel',[UserConroller::class,'export']);

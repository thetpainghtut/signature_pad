<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentinfosController;
use App\Http\Controllers\StudViewController;
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

Route::post('laravel-signature-pad','App\Http\Controllers\StudentinfosController@store');
Route::get('laravel-signature-pad','App\Http\Controllers\StudentinfosController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/searchanything', function () {
    return view('searchanything');
})->name('searchanything');

Route::middleware(['auth:sanctum', 'verified'])->get('/management', function () {
    return view('management');
})->name('management');

Route::middleware(['auth:sanctum', 'verified'])->get('/checklistjoin', function () {
    return view('checklistjoin');
})->name('checklistjoin');

Route::middleware(['auth:sanctum', 'verified'])->get('/checklistsummer', function () {
    return view('checklistsummer');
})->name('checklistsummer');


Route::middleware(['auth:sanctum', 'verified'])->get('/checklistwinter', function () {
    return view('checklistwinter');
})->name('checklistwinter');


Route::middleware(['auth:sanctum', 'verified'])->get('/checklistleave', function () {
    return view('checklistleave');
})->name('checklistleave');

Route::middleware(['auth:sanctum', 'verified'])->get('/signature-pad', function () {
    return view('signature-pad');
})->name('signature-pad');

Route::get('view-records','App\Http\Controllers\StudViewController@index');




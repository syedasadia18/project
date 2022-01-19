<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;


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


Route::get('/', [FrontController::class, 'index']);


Route::get('/slidercreate', [SliderController::class, 'create'])->middleware('auth');
Route::post('/sliderstore', [SliderController::class, 'store'])->name('slider.store');


Route::get('/servicecreate', [ServiceController::class, 'create']);
Route::post('/servicestore', [ServiceController::class, 'store'])->name('service.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

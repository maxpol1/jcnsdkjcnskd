<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
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
Route::get('/home', [MainController::class, 'index'])->name('home');

//Route::get('/users', [TaskController::class, 'index'])->name('home');
//
//Route::prefix('jobs')->name('jobs.')->group(function (){
//   Route::get('add_job', [TaskController::class, 'create'])->name('add_job');
//   Route::post('add_job', [TaskController::class, 'store'])->name('store');
//});



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

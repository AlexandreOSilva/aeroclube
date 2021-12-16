<?php

use App\Http\Controllers\Aviaocontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|boas
*/

Route::get('/', [PageController::class,'index'])->name('aeroclube.index');
Route::get('/contacts', [PageController::class,'contacts'])->name('aeroclube.contacts');
Route::get('/admin', [PageController::class,'admin'])->name('admin');
Route::get('/frota', [PageController::class,'frota'])->name('aeroclube.frota');
Route::get('/batismos', [PageController::class,'servico'])->name('aeroclube.batismos');


Route::resource('avioes',Aviaocontroller::class)->parameters(['avioes'=>'aviao']);
Route::resource('users',Usercontroller::class)->parameters(['users'=>'user']);

Auth::routes();

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;


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
route::get('/', function() {
    return view('welcome');
});

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

route::get('home', [HomeController::class, 'home']) ->name('home') ->middleware('auth');
route::get('actionlogout', [HomeController::class, 'actionlogout']) ->name('actionlogout') ->middleware('auth');

route::get('register', [RegisterController::class, 'create']) ->name('register');
route::post('register', [RegisterController::class, 'store']) ->name('register');

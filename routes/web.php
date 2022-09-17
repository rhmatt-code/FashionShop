<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PayPartnerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


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
Route::get('', function () {
    return redirect('home');
});




route::get('home', [HomeController::class, 'home']) ->name('home');


Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'login');
        Route::post('actionlogin', 'actionlogin');
    });
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'create');
        Route::post('register', 'store');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(HomeController::class)->group(Function (){
        route::get('profile', 'show')->name('profile');
        route::get('profile/update','update')->name('profile/update');
        route::get('actionlogout','actionlogout')->name('actionlogout');
        route::get('cart','cart')->name('cart');
        route::get('cart/add/{id}','addCart')->name('addCart');
        route::delete('cart/delete/{detail_id}','deleteCart')->name('deleteCart');
        route::get('cart/checkout/{transaction_id}', 'checkout')->name('checkout');
    });
});

Route::middleware(['admin'])->group(function () {
    route::controller(AdminController::class)->group(function () {
        Route::get('admin', 'show')->name('admin');
        route::get('logout','logout');
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'show')->name('product');
        Route::get('product/add', 'add')->name('product/add');
        Route::post('product/store','store')->name('product/store');
        Route::get('product/edit/{id}', 'edit')->name('edit');
        Route::post('product/update/{id}', 'update')->name('update');
        Route::get('product/delete/{id}','delete')->name('delete');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('account', 'show')->name('account');
        Route::get('account/add', 'add')->name('account/add');
        Route::post('account/store','store')->name('account/store');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'show')->name('category');
        Route::get('category/add', 'add')->name('category/add');
        Route::post('category/store', 'store')->name('category/store');
        Route::get('category/delete/{id}', 'delete')->name('category/delete');
    });
    Route::controller(PayPartnerController::class)->group(function () {
        Route::get('paypartner', 'show')->name('paypartner');
        Route::get('paypartner/add', 'add')->name('paypartner/add');
        Route::post('paypartner/store', 'store')->name('paypartner/store');
        Route::get('paypartner/delete', 'delete')->name('paypartner/delete');
    });
    Route::controller(TransactionController::class)->group(function () {
        Route::get('transaction', 'show');
    });
    Route::controller(OrderController::class)->group(function () {
        Route::get('/orders/{id}', 'show');
        Route::post('/orders', 'store');
    });
});



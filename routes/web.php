<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', ProductController::class);
Route::resource('user', UserController::class);

Route::post('/addToCart', [App\Http\Controllers\TransactionController::class, 'addToCart'])->name('addToCart');
Route::post('/topUpNow', [App\Http\Controllers\WalletController::class, 'topUpNow'])->name('topUpNow');
Route::post('/acceptRequest', [App\Http\Controllers\WalletController::class, 'acceptRequest'])->name('acceptRequest');
Route::post('/withdraw', [App\Http\Controllers\WalletController::class, 'withdrawNow'])->name('withdrawNow');

Route::post('/payNow', [App\Http\Controllers\TransactionController::class, 'payNow'])->name('payNow');


Route::delete('/transaction/destroy{id}', [App\Http\Controllers\TransactionController::class, 'destroy'])->name('transaction.destroy');
Route::get('/e-receipt/{order_id}', [App\Http\Controllers\TransactionController::class, 'download'])->name('download');


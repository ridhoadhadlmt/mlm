<?php

use App\Http\Controllers\NetworkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\PrizeController;
use App\Http\Controllers\SettingController;
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

// Route::get('/', function () {
//     return view('template.app');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/networks', [NetworkController::class, 'index'])->name('network');
Route::get('/networks/create', [NetworkController::class, 'create'])->name('network.create');
Route::get('/networks/{network}', [NetworkController::class, 'show'])->name('network.show');
Route::get('/networks/{network}/edit', [NetworkController::class, 'edit'])->name('network.edit');
Route::get('/pin', [PinController::class, 'index'])->name('pin');
Route::get('/productOrder', [ProductOrderController::class, 'index'])->name('productOrder');
Route::get('/withDrawal', [PrizeController::class, 'withDrawal'])->name('withDrawal');
Route::get('/settingWithdrawal', [SettingController::class, 'settingWithdrawal'])->name('settingWithdrawal');
Route::get('/settingAccount', [SettingController::class, 'settingAccount'])->name('settingAccount');

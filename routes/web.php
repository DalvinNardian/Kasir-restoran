<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
use Illuminate\Auth\Events\Logout;

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
    return view('login.index');
});

// route untuk login
Route::resource('login', LoginController::class);

// route untuk logout
Route::get('/logout', [LoginController::class, 'logout']);


// halaman yang hanya bisa diakses setelah login
Route::middleware('masuk')->group(function() {


    // route untuk dashboard admin
    Route::get('/dashboardA', function() {
        return view('dashboard.dashboardA');
    })->middleware('mAdmin')->name('dashboard.dashboardA');
    // route untuk halaman user list
    Route::resource('admin', UserController::class)->middleware('mAdmin');

    
    // route untuk dashboard manager
    Route::get('/dashboardM', function() {
        return view('dashboard.dashboardM');
    })->middleware('mManager')->name('dashboard.dashboardM');
    // route untuk halaman menu
    Route::resource('manager/menu', MenuController::class)->middleware('mManager');
    // route untuk halaman laporan
    Route::get('/manager/laporan', function() {
        return view('manager.laporan.index');
    })->middleware('mManager');
    // route
    Route::get('/get-transaksi', [TransaksiController::class, 'filtering']); 



    // route untuk dashboard kasir
    Route::get('/dashboardK', function() {
        return view('dashboard.dashboardK');
    })->middleware('mKasir')->name('dashboard.dashboardK');
    // route untuk halaman transaksi
    Route::resource('kasir', TransaksiController::class)->middleware('mKasir');
});

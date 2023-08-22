<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\LanggananController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware('auth')->group( function () {
    $controller_path = 'App\Http\Controllers';
    
    Route::get('/', [LanggananController::class, 'index']);
    Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
    Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
    Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
    Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
    Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

    /* Pemesanan */
    Route::resource('/pelanggan', PelangganController::class);
    Route::resource('/langganan', LanggananController::class);
    Route::resource('/kurir', LanggananController::class);

    Route::resource('/pesanan', LanggananController::class);
    Route::resource('/invoice', LanggananController::class);
    Route::resource('/pembayaran', LanggananController::class);


    /* Settings */
    Route::resource('/admin', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/setting/roles', RoleController::class);
    Route::resource('/bunga', FlowerController::class);
    Route::resource('/daerah', RegencyController::class);
    Route::resource('/hari', DayController::class);
    
    Route::get('/logout', [LoginController::class, 'logout']);
});
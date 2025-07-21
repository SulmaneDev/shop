<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard')->name('home');

Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::prefix('register')->controller(RegisterUserController::class)->group(function () {
        Route::get('', 'index')->name('register');
        Route::post('', 'handle')->name('register.handle');
    });
    Route::prefix('login')->controller(LoginUserController::class)->group(function () {
        Route::get('', 'index')->name('login');
        Route::post('', 'handle')->name('login.handle');
    });
});

Route::middleware(['auth'])->prefix('/dashboard')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard.index');

    /**
     * Supplier Resource
     */
    Route::prefix('/supplier')->controller(SupplierController::class)->group(function () {
        Route::get('', 'index')->name('supplier.index');
        Route::post('/create', 'store')->name('supplier.store');
        Route::put('/edit/{id}', 'edit')->name('supplier.update');
        Route::delete('/delete/{id}', 'destroy')->name('supplier.destroy');
    });
    /**
     * Brand Resource
     */
    Route::prefix('/brand')->controller(BrandController::class)->group(function () {
        Route::get('', 'index')->name('brand.index');
        Route::post('/create', 'store')->name('brand.store');
        Route::put('/edit/{id}', 'update')->name('brand.update');
        Route::delete('/delete/{id}', 'destroy')->name('brand.destroy');
    });

    /**
     * Product Resource
     */
    Route::prefix('/product')->controller(ProductController::class)->group(function () {
        Route::get('', 'index')->name('product.index');
        Route::post('/create', 'store')->name('product.store');
        Route::put('/edit/{id}', 'update')->name('product.update');
        Route::delete('/delete/{id}', 'destroy')->name('product.destroy');
    });

    /**
     * Customer Resource
     */
    Route::prefix('/customer')->controller(CustomerController::class)->group(function () {
        Route::get('', 'index')->name('customer.index');
        Route::post('/create', 'store')->name('customer.store');
        Route::put('/edit/{id}', 'update')->name('customer.update');
        Route::delete('/delete/{id}', 'destroy')->name('customer.destroy');
    });

    /**
     * Purchase Resource
     */

    Route::prefix('/purchase')->controller(PurchaseController::class)->group(function () {
        Route::get('', 'index')->name('purchase.index');
        Route::post('/create', 'create')->name('purchase.store');
        Route::put('/edit/{id}', 'edit')->name('purchase.update');
        Route::delete('/delete/{id}', 'destroy')->name('purchase.destroy');
    });

    /**
     * Pos Resource
     */
    Route::prefix("/pos")->controller(PosController::class)->group(function () {
        Route::get('','index')->name('pos.index');
    });
});


/**
 * Fallback Route
 */
Route::fallback(function () {
    return view('pages.common.not-found');
})->name('fallback');


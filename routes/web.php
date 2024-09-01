<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function () {
    Route::view('login','admin.auth.login')->name('login');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','admin')->prefix('admin')->as('admin.')->group(function () {
    Route::view('/','admin.index')->name('index');
    Route::view('/general','admin.general')->name('general');
    Route::view('/dashboard','admin.dashboard')->name('Home');
    
    Route::view('setting/GeneralSetting','admin.general-setting.index')->name('generalsetting');
    // Route::view('setting/GeneralSetting/Update','admin.general-setting.index')->name('generalsettingUpdate');

    Route::view('setting/Treasuries','admin.treasurie.index')->name('treasuries');
    Route::view('setting/Treasuries/Details/{id}','admin.treasurie.details')->name('treasuries.details');
    
    Route::view('invoices','admin.invoices.index')->name('invoices');
    
    Route::view('invoices/BillingCategories','admin.invoices.billing-categories.index')->name('BillingCategories');
    
    Route::view('invoices/ItemCategories','admin.invoices.item-categories.index')->name('ItemCategories');
    
    Route::view('invoices','admin.invoices.index')->name('invoices');

    Route::view('products','admin.products.index')->name('products');


    Route::view('/permission','Dashboard.permission.permission')->name('permission');
    Route::view('setting','dashboard.setting.setting')->name('Setting');
    Route::view('client','dashboard.client.client')->name('client');
    Route::view('category','dashboard.category.category')->name('category');
    Route::view('product','dashboard.product.product')->name('product');
});

Route::middleware('auth','cashier')->prefix('sale')->group(function () {
    Route::view('/','sellers.sale.SaleCreate')->name('sale.create');
});

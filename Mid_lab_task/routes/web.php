<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrstionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AccoutantController;

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
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'verify']);

Route::get('/logout', [LogoutController::class, 'index']);


Route::get('/registration', [RegistrstionController::class, 'index'])->name("registration");
Route::post('/registration', [RegistrstionController::class, 'store']);

Route::group(['middleware'=> 'session'], function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.dashboard');
    Route::get('/vendor', [VendorController::class, 'index'])->name('vendor.dashboard');
    Route::get('/accoutant', [AccoutantController::class, 'index'])->name('accoutant.dashboard');

    Route::get('/system/sales', [SalesController::class, 'index']);
    Route::get('/system/sales/physical_store', [SalesController::class, 'physicalStore']);
    Route::get('/system/sales/physical_store', [SalesController::class, 'physicalStore']);
    Route::get('/system/sales/social_media', [SalesController::class, 'socialMedia']);
    Route::get('/system/sales/ecommerce', [SalesController::class, 'ecommerce']);
    
    Route::get('/system/product_management', [ProductController::class, 'index']);
    Route::get('/system/product_management/existing_product', [ProductController::class, 'existing'])->name('product.existing');
    Route::get('/system/product_management/existing_product/edit/{product_id}', [ProductController::class, 'edit'])->name('product.existing.edit');
    Route::post('/system/product_management/existing_product/edit/{product_id}', [ProductController::class, 'store']);
    Route::get('/system/product_management/product/{product_id}', [ProductController::class, 'details'])->name('product.existing.details');
    Route::get('/system/product_management/existing_product/delete/{product_id}', [ProductController::class, 'delete'])->name('product.existing.delete');
    Route::post('/system/product_management/existing_product/delete/{product_id}', [ProductController::class, 'destroy']);

    Route::post('system/product_management/product/{product_id}/vendor_details/{vendor_id}', [ProductController::class, 'details'])->name('details');
    Route::get('/system/product_management/upcoming_product', [ProductController::class, 'upcoming'])->name('product.upcoming');
    Route::get('/system/product_management/upcoming_product/edit/{product_id}', [ProductController::class, 'upcomingedit'])->name('product.upcoming.edit');
    Route::post('/system/product_management/upcoming_product/edit/{product_id}', [ProductController::class, 'upcomingstore']);
    Route::get('system/product_management/product/{product_id}/vendor_details/{vendor_id}', [ProductController::class, 'upcomingdetails'])->name('product.upcoming.details');
    Route::get('/system/product_management/upcoming_product/delete/{product_id}', [ProductController::class, 'upcomingdelete'])->name('product.upcoming.delete');
    Route::post('/system/product_management/upcoming_product/delete/{product_id}', [ProductController::class, 'upcomingdestroy']);

    Route::get('/system/product_management/add_product', [ProductController::class, 'create'])->name('product.add');
    Route::post('/system/product_management/add_product', [ProductController::class, 'Newstore']);
});


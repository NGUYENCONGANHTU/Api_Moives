<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\BannerController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\TrademarkController;
use App\Http\Controllers\Admins\NewsController;
use App\Http\Controllers\Admins\ProductAttributesController;
use App\Http\Controllers\Admins\ProductImageController;
use App\Http\Controllers\Admins\ProductController;
use App\Http\Controllers\Admins\AttributesController;
use App\Http\Controllers\Admins\ContactController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\ProductReviewController;
use App\Http\Controllers\Admins\OrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['jwt.verify', 'role:admin,super-admin', 'auth:admin-api']], function () {
    Route::get('auth/logout', [AuthController::class, 'logout'])->withoutMiddleware(['permission.verify']);
    Route::prefix('admins')->group(function () {
        // admin
        Route::get('admin', [AdminController::class, 'index'])->name('super-admin-index');
        Route::get('admin/show/{id}', [AdminController::class, 'show'])->name('super-admin-show');
        Route::post('admin/store', [AdminController::class, 'store'])->name('super-admin-store');
        Route::put('admin/update/{id}', [AdminController::class, 'update'])->name('super-admin-update');
        Route::delete('admin/destroy/{id}', [AdminController::class, 'destroy'])->name('super-admin-delete');
        Route::put('admin/updateStatus/{id}', [AdminController::class, 'updateStatus'])->name('super-admin-updateStatus');

        // Banner
        Route::get('banner', [BannerController::class, 'index'])->name('banner-index');
        Route::get('banner/show/{id}', [BannerController::class, 'show'])->name('banner-show');
        Route::post('banner/store', [BannerController::class, 'store'])->name('banner-store');
        Route::put('banner/update', [BannerController::class, 'update'])->name('banner-update');
        Route::delete('banner/destroy/{id}', [BannerController::class, 'destroy'])->name('banner-destroy');
        // News
        Route::get('news', [NewsController::class, 'index'])->name('news-index');
        Route::get('new/show/{id}', [NewsController::class, 'show'])->name('news-show');
        Route::post('new/store', [NewsController::class, 'store'])->name('news-store');
        Route::put('new/update', [NewsController::class, 'update'])->name('news-update');
        Route::delete('new/destroy/{id}', [NewsController::class, 'destroy'])->name('news-destroy');
        // Attributes
        Route::get('contacts', [ContactController::class, 'index'])->name('contact-index');
        Route::get('contact/show/{id}', [ContactController::class, 'show'])->name('contact-show');
        Route::post('contact/store', [ContactController::class, 'store'])->name('contact-store');
        Route::put('contact/update/{id}', [ContactController::class, 'update'])->name('contact-update');
        Route::delete('contact/destroy/{id}', [ContactController::class, 'destroy'])->name('contact-destroy');

        // user
        Route::get('users', [UserController::class, 'index'])->name('user-index');
        Route::get('user/show/{id}', [UserController::class, 'show'])->name('user-show');
    });
});

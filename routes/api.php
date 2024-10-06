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

Route::group(['middleware' => ['jwt.verify','role:admin,super-admin', 'auth:admin-api']],function(){
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

        // Category
        Route::get('category', [CategoryController::class, 'index'])->name('category-index');
        Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category-show');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category-store');
        Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category-update');
        Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category-destroy');

        // Trademark
        Route::get('trademark', [TrademarkController::class, 'index'])->name('trademark-index');
        Route::get('trademark/show/{id}', [TrademarkController::class, 'show'])->name('trademark-show');
        Route::post('trademark/store', [TrademarkController::class, 'store'])->name('trademark-store');
        Route::put('trademark/update/{id}', [TrademarkController::class, 'update'])->name('trademark-update');
        Route::delete('trademark/destroy/{id}', [TrademarkController::class, 'destroy'])->name('trademark-destroy');

        // News
        Route::get('news', [NewsController::class, 'index'])->name('news-index');
        Route::get('new/show/{id}', [NewsController::class, 'show'])->name('news-show');
        Route::post('new/store', [NewsController::class, 'store'])->name('news-store');
        Route::put('new/update', [NewsController::class, 'update'])->name('news-update');
        Route::delete('new/destroy/{id}', [NewsController::class, 'destroy'])->name('news-destroy');

        // ProductAttributes
        Route::get('product_attributes', [ProductAttributesController::class, 'index'])->name('product-attribute-index');
        Route::get('product_attribute/show/{id}', [ProductAttributesController::class, 'show'])->name('product-attribute-show');
        Route::post('product_attribute/store', [ProductAttributesController::class, 'store'])->name('product-attribute-store');
        Route::put('product_attribute/update/{id}', [ProductAttributesController::class, 'update'])->name('product-attribute-update');
        Route::delete('product_attribute/destroy/{id}', [ProductAttributesController::class, 'destroy'])->name('product-attribute-destroy');

        // ProductImage
        Route::get('product_images', [ProductImageController::class, 'index'])->name('product-image-index');
        Route::get('product_image/show/{id}', [ProductImageController::class, 'show'])->name('product-image-show');
        Route::post('product_image/store', [ProductImageController::class, 'store'])->name('product-image-store');
        Route::put('product_image/update', [ProductImageController::class, 'update'])->name('product-image-update');
        Route::delete('product_image/destroy/{id}', [ProductImageController::class, 'destroy'])->name('product-image-destroy');

        // Product
        Route::get('products', [ProductController::class, 'index'])->name('product-index');
        Route::get('product/show/{id}', [ProductController::class, 'show'])->name('product-show');
        Route::post('product/store', [ProductController::class, 'store'])->name('product-store');
        Route::put('product/update', [ProductController::class, 'update'])->name('product-update');
        Route::delete('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product-destroy');

        // Attributes
        Route::get('attributes', [AttributesController::class, 'index'])->name('attribute-index');
        Route::get('attribute/show/{id}', [AttributesController::class, 'show'])->name('attribute-show');
        Route::post('attribute/store', [AttributesController::class, 'store'])->name('attribute-store');
        Route::put('attribute/update/{id}', [AttributesController::class, 'update'])->name('attribute-update');
        Route::delete('attribute/destroy/{id}', [AttributesController::class, 'destroy'])->name('attribute-destroy');
        // Attributes
        Route::get('contacts', [ContactController::class, 'index'])->name('contact-index');
        Route::get('contact/show/{id}', [ContactController::class, 'show'])->name('contact-show');
        Route::post('contact/store', [ContactController::class, 'store'])->name('contact-store');
        Route::put('contact/update/{id}', [ContactController::class, 'update'])->name('contact-update');
        Route::delete('contact/destroy/{id}', [ContactController::class, 'destroy'])->name('contact-destroy');

         // user
         Route::get('users', [UserController::class, 'index'])->name('user-index');
         Route::get('user/show/{id}', [UserController::class, 'show'])->name('user-show');

          // product_review
          Route::get('productReviews', [ProductReviewController::class, 'index'])->name('productReview-index');
          Route::get('productReview/show/{id}', [ProductReviewController::class, 'show'])->name('productReview-show');

           // order
           Route::get('orders', [OrderController::class, 'index'])->name('order-index');

           // order-detail
           Route::get('orderDetail/show/{id}', [ProductReviewController::class, 'show'])->name('orderDetail-show');

    });
});
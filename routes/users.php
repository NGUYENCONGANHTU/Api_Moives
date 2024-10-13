<?php
use App\Http\Controllers\UserAuthenticateController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('api/users')->group(function () { 
    
    Route::post('user_authenticate/refreshToken', [UserAuthenticateController::class, 'refreshToken']);
    Route::post('user_authenticate/userRegister', [UserAuthenticateController::class, 'userRegister']);
    Route::post('user_authenticate/userLogin', [UserAuthenticateController::class, 'userLogin']);


    Route::get('home/banner', [HomeController::class, 'homeBanner'])->name('banner-home');
    Route::get('home/theaters', [HomeController::class, 'theaterMovies'])->name('theaters-home');
    Route::get('home/actors', [HomeController::class, 'actorMovies'])->name('actors-home');
    Route::get('home/movies', [HomeController::class, 'homeMovies'])->name('movies-home');
    Route::get('home/placeThreates', [HomeController::class, 'placeThreates'])->name('placeThreates-home');
    
    Route::group(['middleware' => ['jwt.verify', 'auth:app-users']], function () {

        Route::put('user_authenticate/change_password', [UserAuthenticateController::class, 'changePassword']);
        Route::get('user_authenticate/user_info/{id}', [UserAuthenticateController::class, 'userInfo']);
        Route::get('user_authenticate/logout', [UserAuthenticateController::class, 'logout']);
    });
    
});
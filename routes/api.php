<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\BCVScraperController;

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

Route::post('register', [UserAuthController::class,'register']);
Route::post('login', [UserAuthController::class,'login']);
Route::post('logout', [UserAuthController::class,'logout'])
            ->middleware('auth:sanctum');

Route::group(
    ['middleware' => ['auth:sanctum']], function () {
        Route::get(
            '/user', function (Request $request) {
                    return $request->user();
            }
        );
    }
);

Route::group(
    ['middleware' => ['auth:sanctum']], function () {
        Route::get('/info', [BasicInfoController::class,'info']);
        Route::get('/bcv_rate', [BCVScraperController::class,'getRate']);
    }
);

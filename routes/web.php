<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'showLoginForm')->name('login');
        Route::post('/login', 'login');
        Route::get('/register', 'showRegisterForm');
        Route::post('/register', 'register');
    });
});

Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout']);

        Route::controller(ClassroomController::class)->group(function () {
            Route::get('/', 'index');
            Route::middleware(['role:2'])->group(function () {
                Route::get('/classroom/create', 'create');
                Route::post('/classroom/create','store');
            });
            Route::middleware(['role:1'])->group(function () {
                Route::get('/classroom/join','join');
                Route::post('/classroom/join','joined');
            });
                Route::get('/classroom/detail/{id}','detail');
        });
    Route::middleware(['role:2'])->group(function () {
        Route::controller(AssignmentController::class)->group(function () {
            Route::get('/assignment/create/{id}', 'create');
            Route::post('/assignment/create/{id}', 'store');
        });
    });

});

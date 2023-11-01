<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/register/seeker",[\App\Http\Controllers\UserController::class,"createSeeker"])->name("create-seeker");
Route::post("/register/seeker",[\App\Http\Controllers\UserController::class,"storeSeeker"])->name("store.seeker");
Route::get("/register/employer",[\App\Http\Controllers\UserController::class,"createEmployer"])->name("create.employer");
Route::post("/register/employer",[\App\Http\Controllers\UserController::class,"storeEmployer"])->name("store.employer");
Route::get("/login" , [\App\Http\Controllers\UserController::class , "login"])->name("login");
Route::post("/login" , [\App\Http\Controllers\UserController::class , "postLogin"])->name("login.post");

//logout Route
Route::post("/logout" , [\App\Http\Controllers\UserController::class , "logout"])->name("logout");
// dashboard URL with authentificaiton validaiton ;
Route::get("/dashboard",[\App\Http\Controllers\DashboardController::class ,"index"])
    ->name("dashboard")
    ->middleware("auth");

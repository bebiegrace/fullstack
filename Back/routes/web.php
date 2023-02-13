<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
// Route::get('/login', [AuthController::class, 'login'])->middleware('alreadylogedin'); //land to login page
// Route::get('/registration', [AuthController::class, 'registration'])->middleware('alreadylogedin'); //land to the registration page
// Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user'); //login to the dashboard successfully
// Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user'); //successfully registered user
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('isLogedIn');
// Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/userko', [UserController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\PublishController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\CommentController;
// use App\Http\Middleware\AlreadyLogedIn;
use App\Models\User;
use App\Models\Draft;
use App\Models\Personal;
use App\Models\Publish;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});

// Route::post('/login-user', [UserController::class, 'register']);
// Route::post('/registeruser', [UserController::class, 'register']);
Route::post('/registeruser', [UserController::class, 'storedata']);

Route::get('/users', [UserController::class, 'getUser']);
Route::get('/fetchuser/{id}', [UserController::class, 'fetchUser']);

//=========================================================================

Route::post('/register-user', [AuthController::class, 'registerUser']);
Route::post('/login-reader', [AuthController::class, 'loginUser2']);
Route::post('/login', [AuthController::class, 'loginUser1']);
     //>name('login-user');


//----------------------------------
//READER

Route::get('/getreader', [ReaderController::class, 'getUser']);
Route::get('/fetchreader/{id}', [ReaderController::class, 'fetchUser']);
Route::post('/storereader', [ReaderController::class, 'storedata']);
Route::put('/updatereader/{id}', [ReaderController::class, 'update']);
Route::delete('/deletereader/{id}', [ReaderController::class, 'destroy']);



//WRITER
Route::get('/getwriter', [WriterController::class, 'getUser']);
Route::get('/fetchwriter/{id}', [WriterController::class, 'fetchUser']);
Route::post('/storewriter', [WriterController::class, 'storedata']);
Route::put('/updaterwriter/{id}', [WriterController::class, 'update']);
Route::delete('/deletewriter/{id}', [WriterController::class, 'destroy']);



Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/drafts', [DraftController::class, 'draftni']);

    Route::post('/createdraft', [DraftController::class, 'store']);
    Route::put('/updatedraft/{id}', [DraftController::class, 'update']);
    Route::delete('/deletedraft/{id}', [DraftController::class, 'destroy']);




    Route::post('/storepublish', [PublishController::class, 'store']);
    Route::put('/updatepublish/{id}', [PublishController::class, 'update']);
    Route::delete('/deletepublish/{id}', [PublishController::class, 'destroy']);

    Route::get('/commentni', [CommentController::class, 'commentni']);
    Route::get('/fetchcomment/{id}', [CommentController::class, 'fetch']);
    Route::post('/storecomment', [CommentController::class, 'store']);
    Route::put('/updatecomment/{id}', [CommentController::class, 'update']);
    Route::delete('/deletecomment/{id}', [CommentController::class, 'destroy']);
});

Route::get('/fetchpublish/{id}', [PublishController::class, 'fetch']);
Route::get('/published', [PublishController::class, 'publishni']);
Route::get('/fetchdraft/{id}', [DraftController::class, 'fetch']);
Route::get('/drafts', [DraftController::class, 'draftni']);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestingController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index'])->middleware('guest');
Route::post('/login/verify', [AuthController::class, 'verify']);
Route::get('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/login');
});

Route::group(['middleware' => 'auth', 'prefix' => 'teacher'], function () {
    Route::get('/', [TeacherController::class, 'list']);
//    Route::get('/{id}',[TeacherController::class,'detail']);
    Route::get('/add', [TeacherController::class, 'add']);
    Route::get('/edit/{id}', [TeacherController::class, 'edit']);

    Route::post('/update', [TeacherController::class, 'update']);
    Route::post('/insert', [TeacherController::class, 'insert']);
    Route::post('/delete', [TeacherController::class, 'delete']);
});

Route::group(['middleware' => 'auth', 'prefix' => 'student'], function () {
    Route::get('/', [StudentController::class, 'list']);
//    Route::get('/{id}', [StudentController::class, 'detail']);
    Route::get('/add', [StudentController::class, 'add']);
    Route::get('/edit/{id}', [StudentController::class, 'edit']);

    Route::post('/update', [StudentController::class, 'update']);
    Route::post('/insert', [StudentController::class, 'insert']);
    Route::post('/delete', [StudentController::class, 'delete']);
});

Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/change-password', [TestingController::class, 'changePassword']);
    Route::post('/change-password', [TestingController::class, 'updatePassword']);
});















//Route::get('/latihan', function () {
//    echo "Hello World";
//});
//
//Route::get('/read/{judul}', [TestingController::class, 'read']);
//
//Route::get('/test', [TestingController::class, 'index']);
//
//Route::get('/teacher', [TestingController::class, 'teacher']);
//
//Route::get('/student', [TestingController::class, 'student']);

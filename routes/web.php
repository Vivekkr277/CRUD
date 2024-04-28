<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

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


// Route::get('/welcome', function () {
//     return view('welcome');
// })->middleware('auth');

// Route::get('/index',[StudentController::class,'index'])->middleware('auth');




// Route::get('delete/{id}',[StudentController::class,'delete']);



//  Route::view('sidebar','student.sidebar');

//  Route::get('stu',[StudentController::class,'index']);
// Route::group(['middleware'=>['protectedPage']], function () {});


    Route::get('/',[LoginController::class,'showLoginForm']);
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login']);

    
    Route::get('/signup', [RegisterController::class,'showRegisterForm'])->name('signup');
    Route::post('/signup', [RegisterController::class,'register']);


    Route::get('/insert',[StudentController::class,'insert'])->middleware('auth');
    Route::post('/inserted',[StudentController::class,'insertData'])->middleware('auth');
    Route::view('header','student.header')->middleware('auth');
    Route::get('/edit/{id}', [StudentController::class,'edit'])->middleware('auth');
    Route::post('/edit',[StudentController::class,'update'])->middleware('auth');
    Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
    Route::get('/welcome', function () {
        return view('welcome');
    })->middleware('auth');
    Route::get('/index',[StudentController::class,'index'])->middleware('auth');
    Route::get('delete/{id}',[StudentController::class,'delete'])->middleware('auth');
    Route::view('sidebar','student.sidebar')->middleware('auth');


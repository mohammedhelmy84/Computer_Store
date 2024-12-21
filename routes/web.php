<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->name('dashboard');

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'store'])->name('register.store');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'authenticate'])->name('authenticate');

Route::get('logout',[AuthController::class,'logout'])->name('logout');


Route::get('/contactus',function(){
   return view('contactus');
});




Route::group(['middleware' => ['auth']], function () {
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/create',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
});

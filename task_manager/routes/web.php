<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function (){
    return view('welcome');
});
Route::prefix('customer')->group(function (){
    Route::get('/index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/create',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/{id}/detail',[CustomerController::class,'show'])->name('customer.detail');
    Route::get('/{id}/update',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/{id}/update',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/{id}/delete',[CustomerController::class,'destroy'])->name('customer.delete');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\SaveIncomeController;
use App\Http\Controllers\ManageIncomeController;

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

Route::get('/', [SaveIncomeController::class,'index']);
//Create
Route::get('/save-income', [SaveIncomeController::class,'index']);
Route::post('/save-income', [SaveIncomeController::class,'store'])->name('save-income.store');



Route::get('/wish-list', [WishListController::class,'index']);
Route::post('/wish-list', [WishListController::class,'store'])->name('wish-list.store');

Route::get('/manage-income', [ManageIncomeController::class,'index']);

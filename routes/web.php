<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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
Route::get('/admin/user/add', function () {
    return view('add');
});
Route::post('admin/user/store',[postController::class,'store']);
Route::get('admin/user',[postController::class,'user']);
Route::get('admin/user/edit/{id}',[postController::class,'edit']);
Route::post('admin/user/update/{id}',[postController::class,'update']);
Route::get('admin/user/delete/{id}',[postController::class,'delete']);
Route::post('admin/user/search',[postController::class,'search']);

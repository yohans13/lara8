<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\sessionController;
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

Route::get('/login',[LoginController::class,'index']) ->name('login.index');

Route::post('/login',[LoginController::class,'loginsubmit']) ->name('login.submit');

Route::get('/session/get',[sessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/add',[sessionController::class,'storeSessionData'])->name('session.add');
Route::get('/session/delete',[sessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/posts',[postController::class,'getAllPost'])->name('post.get');

Route::get('/add-posts',[postController::class,'addPost'])->name('post.add');

Route::post('/add-posts',[postController::class,'addPostSubmit'])->name('post.addSubmit');

Route::get('/post/{id}',[postController::class,'getPostById'])->name('post.view');

Route::get('/post-delete/{id}',[postController::class,'deletePost'])->name('post.delete');

Route::get('/post-edit/{id}',[postController::class,'updatePost'])->name('post.edit');




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\postController;
use App\Http\Controllers\paginationController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\mailController;




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

// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('welcome');
// });

Route::get('/', function() {
   
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('About-us');
});

Route::get('/users',[paginationController::class,'allusers']) ->name('user.allusers');


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

Route::get('/post-edit/{id}',[postController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[postController::class,'updatePost'])->name('post.update');

Route::get('/inner-join',[postController::class,'innerJoinCaluse'])->name('inner.join');
Route::get('/left-join',[postController::class,'leftJoinCaluse'])->name('left.join');
Route::get('/right-join',[postController::class,'rightJoinCaluse'])->name('right.join');

Route::get('/getAllPost',[postController::class,'getAllPostUsingModel'])->name('post.getAllPost');

Route::get('/upload',[uploadController::class,'uploadForm']);

Route::post('/upload',[uploadController::class,'uploadfile'])->name('upload.file');

Route::get('/send-email',[mailController::class,'sendmail']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostContentController;
use App\Http\Controllers\LikesController;
use App\Models\Posts;

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
    
Route::get('/', [HomeController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/signup', [AuthController::class,'signupView']);
Route::get('/login',[AuthController::class,'loginView']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/category/{slug}', [CategoryController::class,'getCategory']);
Route::get('/postcontent/{slug}', [PostContentController::class,'getPost']);

//Only Send Data
Route::post('/contact', [ContactController::class,'message']);
Route::post('/signup', [AuthController::class,'signup']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/login/admin',[AuthController::class,'adminView']);
Route::post('/login/admin',[AuthController::class,'adminLogin']);
Route::post('/signup/admin',[AuthController::class,'adminRegister']);
Route::get('/signup/admin',[AuthController::class,'adminRegView']);

//User Related
Route::post('/create-comment',[PostContentController::class,'createComment']);
Route::post('/post-likes',[LikesController::class,'liked']);


// Admin Dashboard
Route::middleware(['authorize'])->group(function () {    
    Route::get('/dashboard/home',[DashboardController::class,'home']);
    Route::get('/dashboard/allPosts',[DashboardController::class,'allPosts']);
    Route::get('/dashboard/createPost',[DashboardController::class,'createPost']);
    Route::post('/dashboard/createPost',[DashboardController::class,'submitPost']);
    Route::get('/dashboard/deletePost/{id}',[DashboardController::class,'deletePost']);    
    Route::get('/dashboard/trashPost/{id}',[DashboardController::class,'trashPost']);    
    Route::get('/dashboard/undoPost/{id}',[DashboardController::class,'undoPost']);    
    Route::get('/dashboard/trash',[DashboardController::class,'trashView']);    
    Route::get('/dashboard/editePost/{id}',[DashboardController::class,'editePost']);    
    Route::post('/dashboard/updatePost/{id}',[DashboardController::class,'updatePost']);    
});

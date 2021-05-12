<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUpController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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
//homepage
Route::middleware('auth')->group(function(){


Route::get('/',[PageController::class, "index"] )->name('home');

//user

Route::get('/user/create',[PageController::class,"createPost"])->name('createPost');
Route::get('/posts/{id}',[PageController::class, "showPostById"])->name('showPostById');
Route::get('/posts/edit/{id}',[PageController::class, "editPost"])->name('editPost');//serverr->user(get)
Route::get('/user/userprofile',[PageController::class,"userprofile"])->name('userprofile');

//post

Route::get('/posts/delete/{id}',[PostController::class, "deletePost"])->name('deletePost')->middleware('premiumUser');
Route::post('/posts/update/{id}',[PostController::class, "updatePost"])->name('updatePost')->middleware('premiumUser');//user->server(post)

Route::post('/user/create',[PostController::class,"create_post"])->name('post');

//contactus
Route::post('user/contactUs',[ContactUpController::class,"post_contact_message"])->name('post_contact_message');
Route::get('/admin/contact_message/delete/{id}',[ContactUpController::class,"deleteMessage"])->name('deleteMessage');
Route::get('/admin/contact_message/edit/{id}',[ContactUpController::class,"editMessage"])->name('editMessage');
Route::post('/admin/contact_message/update/{id}',[ContactUpController::class,"updateMessage"])->name('updateMessage');
Route::get('/user/contactUs',[PageController::class,"contactUs"])->name('contactUs');

//auth
Route::post('/user/userprofile',[AuthController::class,"post_userProfile"])->name('post_userProfile');
Route::get('/logout',[AuthController::class,"logout"])->name('logout');
});
//admin
Route::middleware('admin')->group(function(){
    
Route::get('/admin/index',[AdminController::class, "index"])->name('admin.home');
Route::get('/admin/manage_premium_users',[AdminController::class, "manage_premium_users"])->name('admin.manage_premium_users');
Route::get('/admin/manage_premium_users/delete/{id}',[AdminController::class, "deleteUser"])->name('deleteUser');
Route::get('/admin/manage_premium_users/edit/{id}',[AdminController::class, "editUser"])->name('editUser');
Route::post('/admin/manage_premium_users/update/{id}',[AdminController::class, "updateUser"])->name('updateUser');
Route::get('/admin/contact_messages',[AdminController::class, "contact_messages"])->name('admin.contact_messages');

});
// });

//authencation
Route::middleware('guest')->group(function(){

Route::get('/login', [AuthController::class, "login"] )->name('login');
Route::post('/login',[AuthController::class,"post_login"])->name('post_login');
Route::get('/register',[AuthController::class, "register"])->name('register');
Route::post('/register',[AuthController::class, "post_register"])->name('post_register');
});

//admin (he can do everything)
//premium (he can delete and update other people post)
//normal user(he can delete and update only his post)
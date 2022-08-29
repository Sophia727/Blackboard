<?php

use App\Http\Controllers\AuthController;
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

// visitor navigation
Route::get('/', function(){
    return view('pre-login.welcomepage');
});
Route::get('/news', function(){
    return view('pre-login.news');
})->name('news');
Route::get('/about-us', function(){
    return view('pre-login.aboutUs');
})->name('aboutUs');
Route::get('/contact-us', function(){
    return view('pre-login.contactUs');
})->name('contactUs');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::Post('/login', [AuthController::class, 'login'])->name('post.login');

//test route
Route::get('/addUser', function(){
    return view('post-login.admin.addUser');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', function(){
            return view('post-login.admin.dashboard');
        })->name('admin.dashboard');
    /**
     * admin
     */
    // Route::prefix('/admin')->group(function(){
        
    // });
    /**
     * professor
     */
    Route::prefix('/professor')->group(function(){
        //return view('post-login.admin.dashboard')->name('admin.dashboard');
    });
    /**
     * parent
     */
    Route::prefix('/parent')->group(function(){
        //return view('post-login.admin.dashboard')->name('admin.dashboard');
    });
    /**
     * student
     */
    Route::prefix('/student')->group(function(){
        //return view('post-login.admin.dashboard')->name('admin.dashboard');
    });
    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

});
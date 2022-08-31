<?php

use App\Http\Controllers\admin\InstitutionController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\UserController;
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
Route::get('/feed', function(){
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
// Route::get('/addUser', function(){
//     return view('post-login.admin.addUser');
// });


Route::middleware(['auth', 'admin'])->group(function(){
        Route::get('/admin', function(){
            return view('post-login.admin.dashboard');
        })->name('admin.dashboard');

    /**
     * admin
     */
    Route::prefix('/admin')->group(function(){
        // sidebar routes
        Route::get('/professors-list', [UserController::class, 'showProfessors'] )->name('professors.list');   
        Route::get('/parents-list', [UserController::class, 'showParents'] )->name('parents.list');   
        Route::get('/students-list', [UserController::class, 'showStudents'] )->name('students.list');   
        // dashboard routes
        Route::get('/admins-list', [UserController::class, 'showAdmins'] )->name('admins.list');   
        Route::get('/insitution-info', [InstitutionController::class, 'institutionInfo'] )->name('institution.info');   
        Route::get('/reports', [InstitutionController::class, 'reportsInfo'] )->name('reports.info');   
        //news
        Route::get('/news', [PostController::class, 'showPosts'] )->name('show.news');  
        Route::get('/{post}/news-article', [PostController::class, 'readMore', 'showMorePosts'] )->name('news.readmore');  


    });
    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

});

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
Route::get('/welcome_page', function(){
    return view('pre-login.welcomepage');
})->name('pre-login.welcomepage');
Route::get('/feed', function(){
    return view('pre-login.news.news');
})->name('news');
Route::get('/about-us', function(){
    return view('pre-login.aboutUs.aboutUs');
})->name('aboutUs');
Route::get('/contact-us', function(){
    return view('pre-login.contactUs');
})->name('contactUs');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::Post('/login', [AuthController::class, 'login'])->name('post.login');

//test route
// Route::get('/{id}showUser', function(){
//      return view('post-login.admin.profiles.adminProfile');
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
        //users
        Route::get('/add-user', [UserController::class, 'create'] )->name('add.user');  
        Route::post('/storing-user', [UserController::class, 'store'] )->name('store.user');  
        Route::put('user/{id}/activate', [UserController::class, "activate"])->name("user.activate");
        Route::put('/profile/updated/{user}', [UserController::class, 'saveEdit'])->name('update.profile');
        Route::get('/{view}/search-user', [UserController::class, 'searchUser'])->name('search.user');

        //profiles
        Route::get('/{id}/profile', [UserController::class, 'userProfile'])->name('user.profile');
        Route::get('/{id}/profile/delete', [UserController::class, 'destroy'])->name('destroy.profile');

        
        // dashboard routes
        Route::get('/admins-list', [UserController::class, 'showAdmins'] )->name('admins.list');   
        Route::get('/insitution-info', [InstitutionController::class, 'institutionInfo'] )->name('institution.info');   
        Route::get('/reports', [InstitutionController::class, 'reportsInfo'] )->name('reports.info');   
        //news
        Route::get('/feed-posts', [PostController::class, 'showPosts'] )->name('show.news');  
        Route::get('/news', [PostController::class, 'showPosts'] )->name('show.news');  
        Route::get('/{post}/news-article', [PostController::class, 'readMore'] )->name('news.readmore');  
        Route::get('/create-post', [PostController::class, 'create'] )->name('write.post');  
        Route::post('/publishing-post', [PostController::class, 'store'] )->name('store.post');  
        // Route::post('/list-posts', [PostController::class, 'postsList'] )->name('posts.list');  
        Route::get('article/search', [PostController::class, 'searchPost'])->name('search.post');


        
    });
    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

});

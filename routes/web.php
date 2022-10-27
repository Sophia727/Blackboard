<?php

use App\Http\Controllers\admin\InstitutionController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\parent\ParentController;
use App\Http\Controllers\professor\ProfessorController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\professor\GradesController;
use App\Http\Controllers\professor\Users_PostController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\student\StudentController;
use App\Http\Controllers\SubjectController;
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
Route::get('/', [AuthController::class, 'welcomepage'])->name('pre-login.welcomepage');
//News
Route::get('/feed', [PostController::class, 'newsFeed'])->name('news');
Route::get('/feed/{post}', [PostController::class, 'guestReadMore'])->name('readmore.guest');

//About us
Route::get('/about-us', function () {
    return view('pre-login.aboutUs.aboutUs');
})->name('aboutUs');
Route::get('/faculties', [FacultyController::class, 'index'])->name('faculty.list');
Route::get('/{view}/{id}/faculty-profile-and-specialities', [FacultyController::class, 'facultyProfile'])->name('faculty.profile');
// Route::get('/{view}/{id}/speciality-list', [SpecialityController::class, 'index'])->name('speciality.list');

Route::get('/facilities', function () {
    return view('pre-login.aboutUs.facilities');
})->name('facilities');

//contact us
Route::get('/contact-us', function () {
    return view('pre-login.contactUs');
})->name('contactUs');
//login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::Post('/login', [AuthController::class, 'login'])->name('post.login');

//test route
// Route::get('/addfaculty', function () {
//     return view('post-login.admin.faculty');
// });



//calendar routes
Route::get('fullcalendar', [FullCalendarController::class, 'index'])->name('calendar.show');
Route::post('fullcalendarAjax', [FullCalendarController::class, 'ajax']);


Route::middleware(['auth'])->group(function () {
    Route::get('/myProfile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::put('/profile/updated/{user}', [UserController::class, 'saveEdit'])->name('update.profile');

//calendar routes
        Route::get('fullcalendar', [FullCalendarController::class, 'index'])->name('calendar.show');
        Route::post('fullcalendarAjax', [FullCalendarController::class, 'ajax']);
    //News
    Route::get('/news', [PostController::class, 'showPosts'])->name('user.show.news');
    Route::get('/{post}/news-article', [Users_PostController::class, 'readMore'])->name('user.news.readmore');
    Route::get('/create-post', [Users_PostController::class, 'create'])->name('user.write.post');
    Route::post('/publishing-post', [Users_PostController::class, 'store'])->name('user.store.post');
});

Route::middleware(['auth', 'parent'])->group(function () {
    Route::get('/parent', [ParentController::class, 'index'])->name('parent.dashboard');
});

Route::middleware(['auth', 'professor'])->group(function () {
    Route::get('/professor', [ProfessorController::class, 'index'])->name('professor.dashboard');
    Route::get('/all-grades', [GradesController::class, 'index'])->name('all.grades');
    Route::get('/add-grades', [GradesController::class, 'create'])->name('add.grades');
    Route::post('/store-grades', [GradesController::class, 'store'])->name('store.grades');
});
//student
Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
    Route::prefix('/student')->group(function () {
        // Route::get('/{id}/student-profile', [UserController::class, 'myProfile'])->name('student.profile');

    });
});


    /**
     * admin
     */
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('post-login.admin.dashboard');
    })->name('admin.dashboard');
       
    Route::prefix('/admin')->group(function () {
        // navbar
        Route::get('/{id}/admin-profile', [UserController::class, 'myProfile'])->name('admin.profile');
        // sidebar routes
        Route::get('/professors-list', [UserController::class, 'showProfessors'])->name('professors.list');
        Route::get('/parents-list', [UserController::class, 'showParents'])->name('parents.list');
        Route::get('/students-list', [UserController::class, 'showStudents'])->name('students.list');
        //users
        Route::get('/add-user', [UserController::class, 'create'])->name('add.user');
        Route::post('/storing-user', [UserController::class, 'store'])->name('store.user');
        Route::get('/{view}/search-user', [UserController::class, 'searchUser'])->name('search.user');
        //profiles
        Route::get('/{id}/profile', [UserController::class, 'userProfile'])->name('user.profile');
        Route::get('/{id}/profile/delete', [UserController::class, 'destroy'])->name('destroy.profile');
        Route::put('user/{id}/activate', [UserController::class, "activate"])->name("user.activate");

        // dashboard routes
        Route::get('/admins-list', [UserController::class, 'showAdmins'])->name('admins.list');
        //institution
        Route::get('/insitution-info', [InstitutionController::class, 'institutionInfo'])->name('institution.info');
        Route::get('/add-subject', [SubjectController::class, 'create'])->name('add.subject');
        Route::post('/subject-post', [SubjectController::class, 'store'])->name('store.subject');

        Route::get('/add-faculty', [FacultyController::class, 'create'])->name('add.faculty');
        Route::post('/faculty-post', [FacultyController::class, 'store'])->name('store.faculty');

        Route::get('/add-speciality', [SpecialityController::class, 'create'])->name('add.speciality');
        Route::post('/speciality-post', [SpecialityController::class, 'store'])->name('store.speciality');
        Route::get('/{view}/{id}/speciality-list', [SpecialityController::class, 'index'])->name('speciality.list');
        //reports
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.list');        
        Route::get('/add-report', [ReportController::class, 'create'])->name('add.report');
        Route::post('/report-post', [ReportController::class, 'store'])->name('store.report');
        Route::get('/download-report/{report}', [ReportController::class, 'download'])->name('download.report');
        Route::delete('/destroy-report/{report}', [ReportController::class, 'destroy'])->name('destroy.report');

        //news
        Route::get('/news', [PostController::class, 'showPosts'])->name('show.news');
        Route::get('/{post}/news-article', [PostController::class, 'readMore'])->name('news.readmore');
        Route::get('/create-post', [PostController::class, 'create'])->name('write.post');
        Route::post('/publishing-post', [PostController::class, 'store'])->name('store.post');
        Route::get('article/search', [PostController::class, 'searchPost'])->name('search.post');
        Route::get("news/{post}/edit", [PostController::class, 'editPost'])->name('edit.post');
        Route::put("articles/{post}/update", [PostController::class, 'update'])->name('update.post');
        
        //comments
        Route::post('/store-comment', [CommentController::class, 'store'])->name('store.comment');
        Route::delete('/destroy-comment/{comment}', [CommentController::class, 'destroy'])->name('destroy.comment');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
});

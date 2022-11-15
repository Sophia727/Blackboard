<?php

use App\Http\Controllers\admin\InstitutionController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\parent\ParentController;
use App\Http\Controllers\professor\ProfessorController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\FullCalenderController;
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
// Route::post('/check-login',[AuthController::class,'checkLogin'])->name('post.login');
//News
Route::get('/feed', [PostController::class, 'newsFeed'])->name('news');
Route::get('/feed/{post}', [PostController::class, 'guestReadMore'])->name('readmore.guest');

//About us
Route::get('/about-us', function () {
    return view('pre-login.aboutUs.aboutUs');
})->name('aboutUs');
Route::get('/faculties', [FacultyController::class, 'index'])->name('faculty.list');
Route::get('/{view}/{id}/faculty-profile-and-specialities', [FacultyController::class, 'facultyProfile'])->name('faculty.profile');

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


Route::middleware(['auth'])->group(function () {
    Route::get('/{view}/myProfile', [UserController::class, 'myProfile'])->name('myProfile');

    //calendar routes
    Route::controller(FullCalenderController::class)->group(function(){
    Route::get('/fullcalender', 'index')->name('calendar.show');
    Route::post('/fullcalenderAjax', 'ajax');
    });
    //institution
    Route::get('/{view}/{id}/speciality-list', [SpecialityController::class, 'index'])->name('speciality.list');
    
    //News
    Route::get('/user-news', [PostController::class, 'showPosts'])->name('user.show.news');
    Route::get('/news', [PostController::class, 'showPosts'])->name('show.news');
    Route::get('/{post}/news-article', [PostController::class, 'readMore'])->name('news.readmore');
    Route::get('/create-post', [PostController::class, 'create'])->name('write.post');
    Route::post('/publishing-post', [PostController::class, 'store'])->name('store.post');
    Route::get('article/search', [PostController::class, 'searchPost'])->name('search.post');
    Route::post('/store-comment', [CommentController::class, 'store'])->name('store.comment');
});

Route::middleware(['auth', 'parent'])->group(function () {
    Route::get('/parent', [ParentController::class, 'index'])->name('parent.dashboard');
    Route::prefix('/parent')->group(function () {
        //profile
    Route::put('/profile/{id}/update', [UserController::class, 'saveEdit'])->name('updatePar.profile');

});
});

Route::middleware(['auth', 'professor'])->group(function () {
    Route::get('/professor', [ProfessorController::class, 'index'])->name('professor.dashboard');
    Route::prefix('/professor')->group(function () {
    //lists
    Route::get('/parents-list', [UserController::class, 'showParents'])->name('parentsProf.list');
    Route::get('/students-list', [UserController::class, 'showStudents'])->name('studentsProf.list');

        //grades
    Route::get('/choose-faculty', [GradesController::class, 'chooseFac'])->name('choose.faculty');
    Route::get('/{view}/{id}/p-choose-Speciality', [GradesController::class, 'chooseSpec'])->name('chooseSpeciality.grade');
    Route::get('/{view}/{id}/add-grades', [GradesController::class, 'addGrades'])->name('addProf.grades');
    Route::get('/{view}/{id}/student-grades', [GradesController::class, 'studentGradesProfile'])->name('studentProf.grades');
    Route::get('/{view}/{id}/speciality-profile', [SpecialityController::class, 'specialityProfile'])->name('speciality.profile');
    Route::post('/store-grades', [GradesController::class, 'storeGrades'])->name('storeProf.grades');
    //profile
    Route::put('/profile/{id}/update', [UserController::class, 'saveEdit'])->name('updateProf.profile');

});
});
//student
Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
    Route::prefix('/student')->group(function () {
    Route::get('/access-grades', [StudentController::class, 'accessGrades'])->name('access.grades');
    Route::get('/professors-list', [UserController::class, 'showProfessors'])->name('professorsStu.list');
    Route::put('/profile/{id}/update', [UserController::class, 'saveEdit'])->name('updateStu.profile');

});});


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
        
        //users
        Route::get('/add-user', [UserController::class, 'create'])->name('add.user');
        Route::post('/storing-user', [UserController::class, 'store'])->name('store.user');
        Route::get('/{view}/search-user', [UserController::class, 'searchUser'])->name('search.user');
        //profiles
        Route::get('/{view}/profile/{id}', [UserController::class, 'userProfile'])->name('user.profile');
        Route::delete('/profile/{id}/delete', [UserController::class, 'destroy'])->name('destroy.profile');
        Route::put('/user/{id}/activate', [UserController::class, "activate"])->name("user.activate");
        Route::put('/profile/{id}/update', [UserController::class, 'saveEdit'])->name('update.profile');
        // Route::put('/profile/{id}/update', [UserController::class, 'saveEdit'])->name('update.profile');
        Route::put('/profile/{id}/update-user-profile', [UserController::class, 'saveEditUsersProfile'])->name('updateUP.profile');
        

        // lists
        Route::get('/professors-list', [UserController::class, 'showProfessors'])->name('professors.list');
        Route::get('/parents-list', [UserController::class, 'showParents'])->name('parents.list');
        Route::get('/students-list', [UserController::class, 'showStudents'])->name('students.list');
        Route::get('/admins-list', [UserController::class, 'showAdmins'])->name('admins.list');
        //institution
        Route::get('/insitution-info', [InstitutionController::class, 'institutionInfo'])->name('institution.info');
        Route::get('/add-subject', [SubjectController::class, 'create'])->name('add.subject');
        Route::post('/subject-post', [SubjectController::class, 'store'])->name('store.subject');

        Route::get('/add-faculty', [FacultyController::class, 'create'])->name('add.faculty');
        Route::post('/faculty-post', [FacultyController::class, 'store'])->name('store.faculty');

        Route::get('/add-speciality', [SpecialityController::class, 'create'])->name('add.speciality');
        Route::post('/speciality-post', [SpecialityController::class, 'store'])->name('store.speciality');
        Route::get('/{view}/{id}/speciality-profile', [SpecialityController::class, 'specialityProfile'])->name('speciality.profile');

        //grades
        Route::get('/choose-faculty', [GradesController::class, 'chooseFac'])->name('choose.grade');
        Route::get('/{view}/{id}/choose-Speciality', [GradesController::class, 'chooseSpec'])->name('chooseSpec.grade');       
        Route::get('/{view}/{id}/add-grades', [GradesController::class, 'addGrades'])->name('add.grades');
        Route::post('/store-grades', [GradesController::class, 'storeGrades'])->name('store.grades');
        Route::get('/{view}/{id}/student-grades', [GradesController::class, 'studentGrades'])->name('student.grades');
        Route::delete("/student-grades/{grade}", [GradesController::class, 'destroyGrades'])->name('delete.grade');

        //reports
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.list');        
        Route::get('/add-report', [ReportController::class, 'create'])->name('add.report');
        Route::post('/report-post', [ReportController::class, 'store'])->name('store.report');
        Route::get('/download-report/{report}', [ReportController::class, 'download'])->name('download.report');
        Route::delete('/destroy-report/{report}', [ReportController::class, 'destroy'])->name('destroy.report');

        //news
        Route::get("news/{post}/edit", [PostController::class, 'editPost'])->name('edit.post');
        Route::put("articles/{post}/update", [PostController::class, 'updatePost'])->name('update.post');
        Route::delete("news/{post}/delete", [PostController::class, 'destroyPost'])->name('delete.post');
        
        //comments
        Route::delete('/destroy-comment/{comment}', [CommentController::class, 'destroy'])->name('destroy.comment');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
});

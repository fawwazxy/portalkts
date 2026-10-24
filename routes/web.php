<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\QuantityController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect(route('welcome'));
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/kos', [App\Http\Controllers\HomeController::class, 'kos'])->name('kos');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/galeri', [App\Http\Controllers\HomeController::class, 'galeri'])->name('galeri');

//Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
//Route::post('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course/add', [CourseController::class, 'add'])->name('course.add');
    Route::put('/course/add', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/show/{id}', [CourseController::class, 'show'])->name('course.show');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/course/edit/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

//    Route::put('/subject/add/{course_id}', [SubjectController::class, 'store'])->name('subject.store');
//    Route::put('/subject/edit/{id}', [SubjectController::class, 'update'])->name('subject.update');
//    Route::get('/subject/destroy/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');


    Route::get('/institute', [QuantityController::class, 'index'])->name('institute.index');
    Route::get('/institute/edit/{id}', [QuantityController::class, 'edit'])->name('institute.edit');
    Route::put('/institute/edit/{id}', [QuantityController::class, 'update'])->name('institute.update');


    Route::get('/gallery', [ActivityController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/add', [ActivityController::class, 'add'])->name('gallery.add');
    Route::put('/gallery/add', [ActivityController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/show/{id}', [ActivityController::class, 'show'])->name('gallery.show');
    Route::get('/gallery/edit/{id}', [ActivityController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/edit/{id}', [ActivityController::class, 'update'])->name('gallery.update');
    Route::get('/gallery/destroy/{id}', [ActivityController::class, 'destroy'])->name('gallery.destroy');

    Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate.index');
    Route::get('/certificate/add', [CertificateController::class, 'add'])->name('certificate.add');
    Route::put('/certificate/add', [CertificateController::class, 'store'])->name('certificate.store');
    Route::get('/certificate/show/{id}', [CertificateController::class, 'show'])->name('certificate.show');
    Route::get('/certificate/edit/{id}', [CertificateController::class, 'edit'])->name('certificate.edit');
    Route::put('/certificate/edit/{id}', [CertificateController::class, 'update'])->name('certificate.update');
    Route::get('/certificate/destroy/{id}', [CertificateController::class, 'destroy'])->name('certificate.destroy');


    Route::put('/picture/add/{activity_id}', [GalleryController::class, 'store'])->name('picture.store');
    Route::get('/picture/destroy/{id}', [GalleryController::class, 'destroy'])->name('picture.destroy');


    Route::get('/users', [UserController::class, 'index'])->name('management.index');
    Route::get('/users/add', [UserController::class, 'add'])->name('management.add');
    Route::put('/users/add', [UserController::class, 'store'])->name('management.store');
    Route::get('/users/show/{id}', [UserController::class, 'show'])->name('management.show');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('management.edit');
    Route::put('/users/edit/{id}', [UserController::class, 'update'])->name('management.update');
    Route::get('/users/destroy/{id}', [UserController::class, 'destroy'])->name('management.destroy');


});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', AdminController::class)->middleware('preventDeletingOwnAccount');

    Route::resource('skill', SkillController::class);

    Route::resource('experience', ExperienceController::class);

    Route::resource('work', WorkController::class);

    Route::resource('education', EducationController::class);

    Route::resource('contact', ContactController::class);

    Route::resource('/', FrontendController::class);

    Route::resource('admin', AdminController::class)->middleware('preventOwnAccountDeletion');

    // Route::delete('/admin/{admin}', 'AdminController@destroy')->middleware('preventDeletingOwnAccount');

    // Route::resource('admin', 'AdminController')->middleware('preventDeletingOwnAccount');




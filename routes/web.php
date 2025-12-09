<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HcmProjectController;

Route::get('/', function () {
    return view('welcome');
});

// HcmProject Routes
Route::get('/hcm.ng/home',[HcmProjectController::class, 'index'])->name('home');
Route::get('/hcm.ng/about', [HcmProjectController::class, 'about'])->name('about');
Route::get('/hcm.ng/team', [HcmProjectController::class, 'team'])->name('team');
Route::get('/hcm.ng/careers', [HcmProjectController::class, 'careers'])->name('careers');
Route::get('/hcm.ng/internship', [HcmProjectController::class, 'internship'])->name('internship');
Route::get('/hcm.ng/newsroom', [HcmProjectController::class, 'newsroom'])->name('newsroom');
Route::get('/hcm.ng/casestudy', [HcmProjectController::class, 'casestudy'])->name('casestudy');



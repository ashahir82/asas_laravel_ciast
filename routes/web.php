<?php

use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    //vreturn view('welcome');
    return view('frontend.ciast');
});

Route::get('/admin', function () {
    return view('backend.admin');
});

Route::get('/student', [StudentController::class, 'index'])->name('student.index');

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer.index');


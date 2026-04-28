<?php

use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    //vreturn view('welcome');
    return view('layouts.master');
});

Route::get('/admin', function () {
    return view('backend.admin');
});

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer.index');


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
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/destroy/{id}', [StudentController::class,'destroy'])->name('student.destroy');

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer.index');
Route::get('/lecturer/create', [LecturerController::class, 'create'])->name('lecturer.create');
Route::post('/lecturer/store', [LecturerController::class, 'store'])->name('lecturer.store');
Route::get('/lecturer/edit/{id}', [LecturerController::class, 'edit'])->name('lecturer.edit');
Route::post('/lecturer/update/{id}', [LecturerController::class, 'update'])->name('lecturer.update');
Route::delete('/lecturer/destroy/{id}', [LecturerController::class,'destroy'])->name('lecturer.destroy');


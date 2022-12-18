<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ProfileController,
    RoleAndPermissionController
};


Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/', fn () => view('dashboard'));
    Route::get('/dashboard', fn () => view('dashboard'));

    Route::get('/profile', ProfileController::class)->name('profile');

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleAndPermissionController::class);
});

Route::resource('school-grades', App\Http\Controllers\SchoolGradeController::class)->middleware('auth');
Route::resource('classes', App\Http\Controllers\ClassController::class)->middleware('auth');
Route::resource('classrooms', App\Http\Controllers\ClassroomController::class)->middleware('auth');

Route::resource('classrooms', App\Http\Controllers\ClassroomController::class)->middleware('auth');

Route::resource('school-grades', App\Http\Controllers\SchoolGradeController::class)->middleware('auth');
Route::resource('classrooms', App\Http\Controllers\ClassroomController::class)->middleware('auth');
Route::resource('units', App\Http\Controllers\UnitController::class)->middleware('auth');
Route::resource('subjects', App\Http\Controllers\SubjectController::class)->middleware('auth');
Route::resource('subjects', App\Http\Controllers\SubjectController::class)->middleware('auth');
Route::resource('units', App\Http\Controllers\UnitController::class)->middleware('auth');
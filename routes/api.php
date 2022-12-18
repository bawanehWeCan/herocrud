<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





//SchoolGrade
Route::get('school-grades', [App\Http\Controllers\Api\SchoolGradeController::class, 'list']);
Route::post('schoolGrade-create', [App\Http\Controllers\Api\SchoolGradeController::class, 'save']);
Route::get('schoolGrade/{id}', [App\Http\Controllers\Api\SchoolGradeController::class, 'view']);
Route::get('schoolGrade/delete/{id}', [App\Http\Controllers\Api\SchoolGradeController::class, 'delete']);
Route::post('schoolGrade/edit/{id}', [App\Http\Controllers\Api\SchoolGradeController::class, 'edit']);




//Classroom
Route::get('classrooms', [App\Http\Controllers\Api\ClassroomController::class, 'list']);
Route::post('classroom-create', [App\Http\Controllers\Api\ClassroomController::class, 'save']);
Route::get('classroom/{id}', [App\Http\Controllers\Api\ClassroomController::class, 'view']);
Route::get('classroom/delete/{id}', [App\Http\Controllers\Api\ClassroomController::class, 'delete']);
Route::post('classroom/edit/{id}', [App\Http\Controllers\Api\ClassroomController::class, 'edit']);





//Subjects
Route::get('subjects', [App\Http\Controllers\Api\SubjectController::class, 'list']);
Route::post('subject-create', [App\Http\Controllers\Api\SubjectController::class, 'save']);
Route::get('subject/{id}', [App\Http\Controllers\Api\SubjectController::class, 'view']);
Route::get('subject/delete/{id}', [App\Http\Controllers\Api\SubjectController::class, 'delete']);
Route::post('subject/edit/{id}', [App\Http\Controllers\Api\SubjectController::class, 'edit']);





//Units
Route::get('units', [App\Http\Controllers\Api\UnitController::class, 'list']);
Route::post('unit-create', [App\Http\Controllers\Api\UnitController::class, 'save']);
Route::get('unit/{id}', [App\Http\Controllers\Api\UnitController::class, 'view']);
Route::get('unit/delete/{id}', [App\Http\Controllers\Api\UnitController::class, 'delete']);
Route::post('unit/edit/{id}', [App\Http\Controllers\Api\UnitController::class, 'edit']);

<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return view('users');
// });

Route::post('/register', [LoginController::class,'register']);
Route::post('/login', [LoginController::class,'login']);
Route::get('/users',[UpdateController::class,'view']);

Route::get('/employee/personal/', [PersonalController::class, 'index']);
Route::get('/employee/education/', [EducationController::class, 'index']);
Route::get('/employee/professional/', [ProfessionalController::class, 'index']);

Route::post('/employee/personal/', [PersonalController::class, 'update']);
Route::post('/employee/education/', [EducationController::class, 'update']);
Route::post('/employee/professional/', [ProfessionalController::class, 'update']);

Route::get('/employee/personal/update/{id}',[UpdateController::class, 'updatepersonal']);
Route::get('/employee/education/update/{id}',[UpdateController::class, 'updateeducation'])->name('update2');
Route::get('/employee/professional/update/{id}',[UpdateController::class, 'updateprofessional'])->name('update3');
Route::get('/employee/delete/{id}',[UpdateController::class, 'delete'])->name('deleteemployee');

Route::post('/employee/personal/edit/{id}',[UpdateController::class, 'editpersonal']);
Route::post('/employee/education/edit/{id}',[UpdateController::class, 'editeducation']);
Route::post('/employee/professional/edit/{id}',[UpdateController::class, 'editprofessional']);

Route::get('/trainings', [TrainingController::class, 'index']);
Route::post('/trainings', [TrainingController::class, 'insert']);
Route::get('/trainings/view', [TrainingController::class, 'view']);
Route::get('/trainings/delete/{id}', [TrainingController::class, 'delete']);


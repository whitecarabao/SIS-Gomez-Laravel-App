<?php

use App\Http\Controllers\Auth\RegController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::view('/','welcome');

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('students',function(){
//     echo "This is the students collection.";
// });

// Route::get('students/{studid}', function($studid){
//      echo "Student ID: ".$studid;
// });

// Route::get('students','StudentController@index');
// Route::get('students',[StudentController::class,'index']);
// Route::get('students/list',[StudentController::class,'show']);

// Route::resource('students',StudentController::class);

Route::get('student/{id}/info',[StudentController::class,'show'])->name('student.info')->middleware('auth');
Route::get('students/all',[StudentController::class,'showAll'])->name('students.all')->middleware('auth');
Route::get('student/{id}/edit',[StudentController::class,'edit'])->name('student.edit')->middleware('auth');
Route::post('student/{id}/edit',[StudentController::class,'update'])->name('student.update')->middleware('auth');
Route::get('student/create',[StudentController::class,'create'])->name('students.create')->middleware('auth'); 
Route::post('student/create',[StudentController::class,'store'])->name('students.save')->middleware('auth');
Route::get('student/{id}/delete',[StudentController::class,'destroy'])->name('student.delete')->middleware('auth');

//Routes for authentication
Route::get('register',[RegController::class,'registration'])->name('register');
Route::get('login', [RegController::class,'index'])->name('login');
Route::post('post-login', [RegController::class,'postLogin'])->name('login.post');
Route::get('logout', [RegController::class,'logout'])->name('logout');
Route::post('post-reg',[RegController::class,'register'])->name('register.post');
Route::get('studentList',[RegController::class,'studentDash']);
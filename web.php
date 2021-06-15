<?php

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

//Route::get('/', function () {
    //return view('welcome');
//}); 
Route::get('/', function () {
    return view('firstpage');
}); 


//Route::get('/createPage', function () {
    //return view('crud-page');
//});

use App\Http\Controllers\StudentController;
Route::get('students/',[StudentController::class,'crud'])->name('crud-page');
Route::post('students/',[StudentController::class,'savecrud'])->name('save-crud');
Route::get('student/',[StudentController::class,'showList'])->name('student-list');
Route::get('edit-field/{id}',[StudentController::class,'editList'])->name('edit-field');
Route::get('delete-field/{id}',[StudentController::class,'deleteList'])->name('delete-field');
Route::post('update/',[StudentController::class,'updateList'])->name('update-field');



//Route::resource('students/','App/Http/Controllers/StudentController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('admin/', [App\Http\Controllers\HomeController::class, 'addcar'])->name('admin');
Route::post('admin/home', [App\Http\Controllers\HomeController::class, 'savedata'])->name('save');
Route::get('admin/savelist', [App\Http\Controllers\HomeController::class, 'showlist'])->name('show-list');
Route::get('delete-field/{id}',[App\Http\Controllers\HomeController::class,'deleteList'])->name('delete-field');

Route::get('big-image/{id}', [App\Http\Controllers\HomeController::class, 'bigImage'])->name('big-image');
Route::get('rating/{id}', [App\Http\Controllers\HomeController::class, 'rating'])->name('rating');





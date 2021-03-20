<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);

// Route::get('/employee', [App\Http\Controllers\EmployeesController::class, 'index']);
// Route::get('/employee/create', [App\Http\Controllers\EmployeesController::class, 'create']);
// Route::get('/employee/{employee}', [App\Http\Controllers\EmployeesController::class, 'show']);
// Route::post('/employee', [App\Http\Controllers\EmployeesController::class, 'store']);
// Route::delete('/employee/{employee}', [App\Http\Controllers\EmployeesController::class, 'destroy']);
// Route::patch('/employee/{employee}', [App\Http\Controllers\EmployeesController::class, 'update']);

Route::resource('employee', '\App\Http\Controllers\EmployeesController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

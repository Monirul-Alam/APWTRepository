<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/product/service', [PageController::class, 'service'])->name('service');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/ourteams', [PageController::class, 'teams'])->name('teams');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/login', [PageController::class, 'login'])->name('login');


Route::Post('/register', [PageController::class, 'registersubmit'])->name('register.submit');
Route::Post('/login', [PageController::class, 'loginsubmit'])->name('login.submit');
Route::Post('/contact', [PageController::class, 'contactsubmit'])->name('contact.submit');



Route::get('/admins/list', [PageController::class, 'list'])->name('admins.list');
Route::get('/student/edit/{id}', [PageController::class, 'edit'])->name('admins.edit');



Route::get('/users/register', [UserController::class, 'user_register'])->name('user_register');
Route::Post('/users/register', [UserController::class, 'user_registersubmit'])->name('user_register.submit');
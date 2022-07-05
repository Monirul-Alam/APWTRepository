<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\ListingController;

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
// All Listings
Route::get('/', [ListingController::class, 'index']);
// Route::get('/home', [ListingController::class, 'index']);


// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


// Store Listing Data
Route::post('/listings/', [ListingController::class, 'store'])->middleware('auth');
// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');



// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage']);

// Single Listings
Route::get('/listings/{listing}', [ListingController::class, 'show']) ;

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Admin Dashboard/////////////////////////////////////////////////
Route::get('/admin', [AdminController::class, 'adminDashboard']);

Route::get('/adminOperations/user', [AdminController::class, 'users']);

Route::get('/adminOperations/tutor', [AdminController::class, 'tutors']);

/* Tutor Routes */

//Tutor Register
Route::get('/tutors/register', [TutorController::class, 'create']) -> name('tutor.register');

//Create Tutor
Route::post('/tutors', [TutorController::class, 'store']) -> name('tutor');

//Tutor Logout
Route::post('/tutors/logout', [TutorController::class, 'logout']) -> name('tutor.logout');

//Tutor Dashboard
Route::get('/tutors/dashboard', [TutorController::class, 'dashboard']) -> name('tutor.dashboard');

//Show Tutor Profile
Route::get('/tutor/profile', [TutorController::class, 'show']) -> name('tutor.profile');

//Update Tutor
Route::put('/tutor/profile', [TutorController::class, 'update']) -> name('tutor.profile');

/* Tutor Routes End */


// Admin Panel
// delete user through Admin
Route::delete('adminOperations/user/{id}', [AdminController::class, 'deleteUser']);
// Show manage listing
Route::get('/adminOperations/manageListing', [AdminController::class, 'manageListing']);
// edit manage listing
Route::get('/adminOperations/manageListing/listings/{listing}/edit', [ListingController::class, 'edituser'])->middleware('auth');
Route::delete('adminOperations/listings/{id}', [AdminController::class, 'deleteList']);
// delete listing




<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SinglePostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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
//     return view('welcome');
// })->name('');

// Route::get('/singlepost/2', function () {
//     return view('singlepost');
// });


// Route::middleware(['middleware' => 'PreventBackHistory'])->group(
//     function () {
//         Auth::routes();
//     }

// );
Route::get('/', [WelcomeController::class, 'displaypost'])->name('welcome');
Route::get('postform', [PostController::class, 'index'])->name('postform');
Route::post('subcat', [PostController::class, 'subCat'])->name('subcat');
// Route::get('addpost', [PostController::class, 'addpost'])->name('addpost');
Route::post('addpost', [PostController::class, 'addpost'])->name('addpost');

Route::get('singlepost/{id}', [SinglePostController::class, 'singlepost'])->name('singlepost');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'setting'])->name('admin.settings');
});

Route::group(['prefix' => 'user', 'middleware', 'verified' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('verified');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'setting'])->name('user.settings');
});

Route::get('/search', [SearchController::class, 'searchPost'])->name('search');

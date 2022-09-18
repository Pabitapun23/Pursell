<?php

use App\Events\FormSubmitted;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SinglePostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateAndReviewController;
use App\Http\Controllers\ReportUserController;
use App\Http\Controllers\WishlistController;
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

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/singlepost/2', function () {
//     return view('singlepost');
// });


// Route::middleware(['middleware' => 'PreventBackHistory'])->group(
//     function () {
//         Auth::routes();
//     }

// );

Route::get('/counter', function () {
    return view('counter');
});
Route::get('/sender', function () {
    return view('sender');
});

// Route::post('/sender', function () {
//     //this is post
//     $text = request()->text;

//     event(new FormSubmitted($text));
// });

Route::post('/sender', [TestController::class, 'test'])->name('test');

Route::post('/chat', [ChatController::class, 'chat'])->name('chat');
Route::get('getchat/{id}', [ChatController::class, 'index'])->name('getchat');

Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist');


Route::get('/', [WelcomeController::class, 'displaypost'])->name('welcome');
Route::get('postform', [PostController::class, 'index'])->name('postform');
Route::post('subcat', [PostController::class, 'subCat'])->name('subcat');
// Route::get('addpost', [PostController::class, 'addpost'])->name('addpost');
Route::post('addpost', [PostController::class, 'addpost'])->name('addpost');

Route::post('seen', [WelcomeController::class, 'updatenotification'])->name('seen');

Route::get('/markread', [SinglePostController::class, 'read'])->name('read');


Route::get('singlepost/{id}', [SinglePostController::class, 'singlepost'])->name('singlepost');

Route::get('notification/{id}', [SinglePostController::class, 'notifyseen'])->name('notifyseen');

Route::post('singlepost/{id}', [CommentController::class, 'addComment'])->name('comment');

Route::post('test/{id}', [TestController::class, 'test'])->name('comments');
Route::get('profile/{id}', [ProfileController::class, 'displayprofile'])->name('profile');
Route::get('deletepost/{id}', [ProfileController::class, 'deletepost'])->name('deletepost');
Route::get('editpost/{id}',  [ProfileController::class, 'showinForm'])->name('editpost');
Route::post('editaction/{id}', [ProfileController::class, 'updatepost'])->name('updatepost');
Route::post('profileimg', [ProfileController::class, 'userprofile'])->name('profileimg');

Route::post('editinfo', [ProfileController::class, 'editprofile'])->name('updateprofile');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'setting'])->name('admin.settings');
});

Route::group(['prefix' => 'user', 'middleware', 'verified' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    // Route::get('profile/{id}', [ProfileController::class, 'displayprofile'])->name('profile')->middleware('verified');
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('verified');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'setting'])->name('user.settings');
});

Route::get('address', [AddressController::class, 'location'])->name('address');
Route::get('/search', [SearchController::class, 'searchPost'])->name('search');
Route::get('searchData', [SearchController::class, 'searchPostDatas'])->name('searchData');
Route::get('searchData/filter', [SearchController::class, 'filterPost'])->name('filter');

Route::get('displaycat/{catname}', [CategoryController::class, 'index'])->name('displaycat');

Route::get('/donation-page', [OrganizationController::class, 'organizationData']);
Route::get('/donation-view/{id}', [OrganizationController::class, 'orgDetail']);

Route::get('/aboutus-page', [AboutusController::class, 'aboutus'])->name('aboutus');

Route::group(['middleware'  => ['isUser']], function () {
    Route::post('/user/{id}/rate', [RateAndReviewController::class, 'addRating'])->name('user-rate');
    Route::post('/user/{id}/report', [ReportUserController::class, 'reportUser'])->name('reportUser');
});

Route::get('/test', function () {
    return view('test');
});

// Route::post('/sendmessage', [TestController::class, 'test'])->name('sendmessage');


// Route::post('/sendemessage', function () {
//     //this is post
//     $name = request()->username;
//     $message = request()->message;
//     event(new FormSubmitted($name, $message));
//     return ["success" => true];
// });

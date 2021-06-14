<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Admin\UsersController as AdminUserDashboard;
use App\Http\Controllers\Admin\DashboradController as AdminDashboard;

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

// site routes
Route::get('/',[SiteController::class, 'homepage'])->name('HomePage');
Route::get('/about',[SiteController::class, 'aboutpage'])->name('aboutpage');
Route::get('/contact',[SiteController::class, 'contactpage'])->name('contactpage');
Route::get('/terms',[SiteController::class, 'terms'])->name('termsPage');
Route::get('/workings',[SiteController::class, 'workings'])->name('workingsPage');
Route::get('/usage',[SiteController::class, 'usage'])->name('usagePage');
//dashboard routes
Route::prefix("/dashboard")->middleware(['auth'])->group(function () {
    //dashboard home
    Route::get('/',[DashboardController::class, 'index'])->name('Dashboard_Home');
    //links
    Route::get('/links',[LinkController::class, 'index'])->name('Dashboard_GetAllLinks');
    Route::get('/links/new',[LinkController::class, 'create'])->middleware(['usernotblocked', 'usernotsuspended'])->name('Dashboard_CreateLink');
    Route::post('/links/new',[LinkController::class, 'store'])->middleware(['usernotblocked', 'usernotsuspended'])->name('Dashboard_StoreLink');
    Route::get('/links/{link}',[LinkController::class, 'edit'])->middleware(['usernotblocked', 'usernotsuspended'])->name('Dashboard_EditLink');
    Route::patch('/links/{link}',[LinkController::class, 'update'])->middleware(['usernotblocked', 'usernotsuspended'])->name('Dashboard_UpdateLink');
    Route::delete('/links/{link}',[LinkController::class, 'destroy'])->middleware(['usernotblocked', 'usernotsuspended'])->name('Dashboard_deleteLink');

    //settings and profile settings
    Route::get('/settings',[SettingsController::class, 'index'])->name('Dashboard_ViewSettings');
    Route::patch('/settings/color',[SettingsController::class, 'update_color'])->name('Dashboard_EditSettings_Color');
    Route::patch('/settings/desc',[SettingsController::class, 'update_description'])->name('Dashboard_EditSettings_Desc');
    Route::patch('/settings/profileimage',[SettingsController::class, 'update_image'])->name('Dashboard_ProfileImageSettings');

});

//admin routes goes here
Route::prefix("/admin")->middleware(['adminOnly'])->group(function () {
    // admin dashboard
    Route::get('/', [AdminDashboard::class, 'index'])->name('adminDashboard');


//    users control
    Route::get('/users', [AdminUserDashboard::class, 'index'])->name('getAllUsers');
    Route::get('/users/{user}', [AdminUserDashboard::class, 'show'])->name('getUserDetail');
    Route::get('/users/{user}/block', [AdminUserDashboard::class, 'blockUser'])->name('blockUser');
    Route::get('/users/{user}/unblock', [AdminUserDashboard::class, 'unblockUser'])->name('unblockUser');
    Route::get('/users/{user}/ban', [AdminUserDashboard::class, 'banUser'])->name('banUser');
    Route::get('/users/{user}/unban', [AdminUserDashboard::class, 'unbanUser'])->name('unbanUser');
    Route::get('/users/{user}/verify', [AdminUserDashboard::class, 'verifyUser'])->name('verifyUser');
    Route::delete('/users/{user}', [AdminUserDashboard::class, 'delete'])->name('deleteUser');

});


Auth::routes();





//register visit to links
Route::post('/visit/record',[VisitController::class, 'store'])->name('storeLinkVisit');



//get user page
Route::get('/getUser/{user}',[UserController::class, 'userHome'])->name('userLinks');
Route::get('/{user}',[UserController::class, 'index'])->name('showlinks');

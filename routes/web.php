<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;

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
    Route::patch('/settings',[UserController::class, 'update'])->name('Dashboard_EditSettings');
    Route::post('/settings/profileimage',[UserController::class, 'profilesetting'])->name('Dashboard_ProfileImageSettings');

});

Auth::routes();





//register visit to links
Route::post('/visit/record',[VisitController::class, 'store'])->name('storeLinkVisit');



//get user page
Route::get('/getUser/{user}',[UserController::class, 'userHome'])->name('userLinks');
Route::get('/{user}',[UserController::class, 'index'])->name('showlinks');

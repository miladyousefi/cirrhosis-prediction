<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\RequestController as AdminRequestController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SettingController as ControllersSettingController;
use App\Http\Controllers\UserController as ControllersUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('do-login', [AuthController::class,'do_login'])->name('dologin');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('request', [RequestController::class,'index'])->name('request');
    Route::post('request-store', [RequestController::class,'store'])->name('request.store');
    Route::get('user-list', [PatientController::class,'index'])->name('user');
    Route::get('setting', [ControllersSettingController::class,'index'])->name('setting');
    Route::post('setting-update', [ControllersSettingController::class,'update'])->name('setting.update');

    Route::get('note', [NoteController::class,'index'])->name('note');
    Route::post('note-update', [NoteController::class,'store'])->name('note.store');

});


Route::get('admin-login', [AuthController::class,'admin_login'])->name('admin.login');
Route::post('admin-do-login', [AuthController::class,'admin_do_login'])->name('admin.dologin');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard');
    Route::get('user', [UserController::class,'index'])->name('admin.user');
    Route::get('request', [AdminRequestController::class,'index'])->name('admin.request');
    Route::get('setting', [SettingController::class,'index'])->name('admin.setting');
    Route::post('setting-update', [SettingController::class,'update'])->name('admin.setting.update');


});

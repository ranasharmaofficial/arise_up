<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
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
// });

Route::get('/', [LoginController::class, 'login'])->name('admin.auth.login')->middleware('AlreadyLoggedIn');
Route::get('admin', [LoginController::class, 'login'])->name('admin')->middleware('AlreadyLoggedIn');
Route::post('adminAuthLogin', [LoginController::class, 'adminAuthLogin'])->name('adminAuthLogin')->middleware('AlreadyLoggedIn');

Route::group(['prefix' => 'admin', 'middleware' => ['AdminAuthCheck'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');

});

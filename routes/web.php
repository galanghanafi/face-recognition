<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    dd(config('services.faceplus_api'));
});

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.capture');
Route::get('/attendance/check', [AttendanceController::class, 'check'])->name('attendance.check');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

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
    return view('welcome');
});


// Route::get('/presensi', [AttendanceController::class, 'index'])->name('presensi');
// Route::post('/presensi', [AttendanceController::class, 'presensi'])->name('presensi.compare');

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.capture');
// Route::get('/attendance', function(){
//     $response = Http::asForm()->post('https://api-us.faceplusplus.com/facepp/v3/compare?', [
//         'api_key' => 'BylU_56kOE6uVhKHLm_SJxrgZao5Ooon',
//         'api_secret' => 'mJTin_kFlMGz-rmlgtKizFzsPFYF-MWN',
//         'image_url1' => 'https://w0.peakpx.com/wallpaper/45/495/HD-wallpaper-tzuyu-twice-thumbnail.jpg',
//         'image_url2' => 'https://www.dailysia.com/wp-content/uploads/2022/02/Tzuyu-TWICE_3-.jpg?x62393',
//     ]);
//     return $response;
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

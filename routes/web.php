<?php

use App\Http\Controllers\AddController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/',[App\Http\Controllers\BookingController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::post('/addvehicle', [App\Http\Controllers\DashboardController::class, 'store']);
Route::get('/add', [App\Http\Controllers\DashboardController::class, 'index'])->name('show');
Route::get('/edit/{vehicle_id}',[App\Http\Controllers\DashboardController::class, 'show']);
Route::get('/view/{vehicle_id}',[App\Http\Controllers\DashboardController::class, 'show2']);
Route::post('/edit/{vehicle_id}/confirm',[App\Http\Controllers\DashboardController::class, 'update']);
Route::get('/details', [App\Http\Controllers\DetailController::class, 'index']);
Route::post('/insertdetail', [App\Http\Controllers\DetailController::class, 'store']);
Route::get('/delete/{cust_id}',[App\Http\Controllers\DetailController::class, 'destroy']);
Route::get('/booking/{vehicle_id}',[App\Http\Controllers\BookingController::class, 'show']);
Route::post('/confirm',[App\Http\Controllers\BookingController::class, 'store']);
Route::get('/car',[App\Http\Controllers\BookingController::class, 'carindex']);
Route::get('/motor',[App\Http\Controllers\BookingController::class, 'motorindex']);
Route::get('/van',[App\Http\Controllers\BookingController::class, 'vanindex']);
Route::get('/owner/{vehicle_id}', [App\Http\Controllers\BookingController::class, 'show2']);

//Route::get('/add', 'AddController');

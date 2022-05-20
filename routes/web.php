<?php

use Carbon\Carbon;
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

Route::middleware(['auth:sanctum', 'verified','verifiedphone'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('ww',[\App\Http\Controllers\IndexController::class,'ww'])->middleware('auth:sanctum')->name('ww');
Route::get('phone/verify', [\App\Http\Controllers\IndexController::class,'show'])->middleware('auth:sanctum')->name('phoneverification.notice');
Route::post('phone/verify', [\App\Http\Controllers\IndexController::class,'verify'])->middleware('auth:sanctum')->name('phoneverification.verify');
Route::post('phone/resend', [\App\Http\Controllers\IndexController::class,'resend'])->middleware('auth:sanctum')->name('resend');
Route::get('phone/changephone/', [\App\Http\Controllers\IndexController::class,'changephone'])->middleware('auth:sanctum')->name('changephone');
Route::post('phone/changesphone/', [\App\Http\Controllers\IndexController::class,'changesphone'])->middleware('auth:sanctum')->name('changesphone');
Route::get('phone/register',[\App\Http\Controllers\PhoneregisterController::class,'showphone'])->middleware(['guest:'.config('fortify.guard')])->name('showphone');
Route::post('phone/register',[\App\Http\Controllers\PhoneregisterController::class,'showphones'])->middleware(['guest:'.config('fortify.guard')])->name('showphones');

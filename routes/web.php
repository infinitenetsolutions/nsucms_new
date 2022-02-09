<?php

use App\Http\Controllers\ProspectusController;
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



Route::get('/', [ProspectusController::class, 'index'])->name('prospectus');
Route::post('/store', [ProspectusController::class, 'store'])->name('prospectus');
Route::get('/otp/{mobile_number}', [ProspectusController::class, 'send_otp'])->name('prospectus.otp');

Route::get('/course/{id}', [ProspectusController::class, 'course'])->name('prospectus.course');


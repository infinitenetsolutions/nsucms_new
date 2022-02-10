<?php

use App\Http\Controllers\EasebuzzController;
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
Route::get('/confirmation', [ProspectusController::class, 'confirmation'])->name('prospectus.confirmation');
Route::get('/course/{id}', [ProspectusController::class, 'course'])->name('prospectus.course');

// for payment
Route::post('prospectus/payment', [EasebuzzController::class, 'store'])->name('easebuzz');
Route::post('response', [EasebuzzController::class, 'response2'])->name('response');



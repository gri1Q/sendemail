<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
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



 Route::any('/guest', [GuestController::class,'index', 'as'=>'home']);
 Route::get('/message/{id}/edit', [GuestController::class,'edit','as'=>'message.edit'])->where('id', '[0-9]+');
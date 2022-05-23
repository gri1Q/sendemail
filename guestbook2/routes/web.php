<?php


use App\Http\Controllers\NewMessageController;
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

Route::any('/', [NewMessageController::class,'index'])->name('messages');

Route::resource('messages', NewMessageController::class)
->except(['create']);
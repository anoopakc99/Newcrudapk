<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/form',[UserController::class,'index']);
Route::post('store',[UserController::class,'store']);

Route::get('/form/edit/{id}', [UserController::class,'edit']);
Route::post('/form/update/{id}', [UserController::class,'update']);
Route::delete('form.destroy/{id}', [UserController::class,'delete']);
Route::get('form',[UserController::class,'paginate']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirects','App\Http\Controllers\HomeController@ind');

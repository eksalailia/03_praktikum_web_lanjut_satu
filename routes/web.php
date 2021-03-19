<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/home', [WebController::class,'home' ]);

Route::prefix('category') ->group(function(){
    Route::get('/{id}',[WebController::class,'product' ]);
});
Route::get('/news/{id?}', [WebController::class,'news' ]);

Route::prefix('programkerja') ->group(function(){
    Route::get('/{id}',[WebController::class,'program']);
});
Route::get('/about', [WebController::class,'about' ]);

    Route::resource('/contact', WebController::class);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

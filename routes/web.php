<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UsersController; 
use App\Http\Controllers\ContactController;  
use App\Http\Controllers\PhotoController;


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);

Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);

Route::get('facture/{n}', function($n) {
    return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');
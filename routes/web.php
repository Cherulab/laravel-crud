<?php
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UsersController; 
use App\Http\Controllers\ContactController;  
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\FilmController;

// Home
Route::get('/', [WelcomeController::class, 'index']);
// Articles
Route::get('/article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');
// Utilisateur
Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);
// Systeme de contact
Route::get('contact', [ContactController::class, 'custom_id_1'])->name('contact.custom_id_1');
Route::get('contact2', [ContactController::class, 'custom_id_2'])->name('contact2.custom_id_2');
// Route::get('contact', [ContactController::class, 'custom_id_2'])->name('contact.custom_id_2');
// Route::get('contact', [ContactController::class, 'custom_id_2']);
// Route::get('contact', [ContactController::class, 'custom_id_2'])->name('contact.custom_id_2');
// Route::post('contact', [ContactController::class, 'store'])->name('contact.store');;
// Systeme ajout photo
Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);
// Systeme de facture
Route::get('facture/{n}', function($n) {
    return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');
// CRUD pour les films
Route::resource('films', FilmController::class);
// Confirmation de supression
Route::controller(FilmController::class)->group(function () {
    Route::delete('films/force/{film}', 'forceDestroy')->name('films.force.destroy');
    Route::put('films/restore/{film}', 'restore')->name('films.restore');
});
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
})->name('admin');


require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('salam/{name}', function ($name) {
    return "Assalamualaikum wr.wb!! $name";
});

Route::get('produk', function () {
    return view('produk/index');    
});

Route::get('Prodi', function () {
    return view('Prodi');
});

//PRODI
use App\Http\Controllers\ProdiController;
Route::get('/prodi', [ProdiController::class, 'show']);

//BOOKS
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::get('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.delete');


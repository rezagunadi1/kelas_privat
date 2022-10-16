<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/news', [App\Http\Controllers\HomeController::class, 'index'])->name('news');

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');
Route::get('/chat/new', [App\Http\Controllers\ChatController::class, 'create'])->name('addChat');
Route::post('/chat/store', [App\Http\Controllers\ChatController::class, 'store'])->name('chat_store');

Route::get('/komen/detail/{id?}', [App\Http\Controllers\KomenController::class, 'index'])->name('komen');
Route::get('/pinned/{chat_id?}/{id?}/{user_id?}', [App\Http\Controllers\KomenController::class, 'pinned'])->name('pinned');
Route::post('/komen/store', [App\Http\Controllers\KomenController::class, 'store'])->name('komen_store');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile/{id?}', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile_edit');

Route::get('/practice', [App\Http\Controllers\SoalController::class, 'index'])->name('practice');

Route::post('/jawaban', [App\Http\Controllers\SoalController::class, 'showHasil'])->name('jawaban');
Route::post('/soal', [App\Http\Controllers\SoalController::class, 'show'])->name('goto_soal');
Route::get('/soal/create/{paket_id}', [App\Http\Controllers\SoalController::class, 'create'])->name('create_soal');
Route::post('/soal/store', [App\Http\Controllers\SoalController::class, 'store'])->name('store_soal');
Route::match(['get', 'post'],'/soal/delete/{soal_id}', [App\Http\Controllers\SoalController::class, 'delete'])->name('delete_soal');

Route::get('/soal/list', [App\Http\Controllers\SoalController::class, 'list'])->name('list_paket');
Route::get('/paket/create', [App\Http\Controllers\PaketSoalController::class, 'createPaket'])->name('create_paket');
Route::match(['get', 'post'],'/paket/delete/{paket_id}', [App\Http\Controllers\PaketSoalController::class, 'delete'])->name('delete_paket');
Route::match(['get', 'post'],'/paket/change/public/{paket_id}', [App\Http\Controllers\PaketSoalController::class, 'changePublic'])->name('change_public_paket');
Route::match(['get', 'post'],'/paket/edit/{paket_id}', [App\Http\Controllers\PaketSoalController::class, 'edit'])->name('edit_paket');
Route::match(['get', 'post'],'/paket/store', [App\Http\Controllers\PaketSoalController::class, 'store'])->name('store_paket');

Route::get('/news/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create_news');
Route::post('/news/store', [App\Http\Controllers\HomeController::class, 'store'])->name('news_store');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

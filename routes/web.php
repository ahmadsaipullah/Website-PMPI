<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\tokohController;
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


Route::resource('anggota', anggotaController::class);
Route::resource('gallery', galleryController::class);
Route::resource('tokoh', tokohController::class);
Route::resource('jabatan', jabatanController::class);
Route::resource('about', aboutController::class);
Route::resource('kategori', kategoriController::class);
Route::resource('berita', beritaController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/', [contentController::class, 'home'])->name('home');
Route::get('halaman/about', [contentController::class, 'about'])->name('about');
Route::get('halaman/gallery', [contentController::class, 'gallery'])->name('gallery');
Route::get('halaman/berita', [contentController::class, 'berita'])->name('berita');
Route::get('halaman/tokoh', [contentController::class, 'tokoh'])->name('tokoh');



Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');



Route::get('/detail-berita/{beritum}', [contentController::class, 'detailBerita'])->name('detail.berita');
Route::get('/detail-gallery/{gallery}', [contentController::class, 'detailGallery'])->name('detail.gallery');
Route::get('/detail-tokoh/{thokohs}', [contentController::class, 'detailTokoh'])->name('detail.tokoh');

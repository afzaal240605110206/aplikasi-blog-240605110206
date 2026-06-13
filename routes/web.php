<?php 
// use Illuminate\Support\Facades\Route; 
// use App\Http\Controllers\LoginController; 
// use App\Http\Controllers\DashboardController; 
// use App\Http\Controllers\ArtikelController; 
// use App\Http\Controllers\PenulisController; 
// use App\Http\Controllers\KategoriArtikelController; 

// // VISITOR
// use App\Http\Controllers\VisitorController;

// // Route halaman login 
// Route::get('/login', [LoginController::class, 'index']) 
//     ->name('login') 
//     ->middleware('guest'); 
// Route::post('/login', [LoginController::class, 'proses']) ->name('login.proses') ->middleware('guest'); 
// // Route logout 
// Route::post('/logout', [LoginController::class, 'logout']) ->name('logout') ->middleware('auth'); 
// // Route dashboard 
// Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard') ->middleware('auth'); 

// // Route resource untuk ketiga entitas 
// Route::resource('artikel', ArtikelController::class)->except(['show']);     
// Route::resource('penulis', PenulisController::class)->except(['show']); 
// Route::resource('kategori', KategoriArtikelController::class)->except(['show']); 

// // Redirect halaman utama ke login 
// Route::get('/', function () { 
//     return redirect()->route('login'); 
// }); 

// // VISITOR
// // Route halaman pengunjung (TANPA LOGIN)
// Route::get('/', [VisitorController::class, 'home'])->name('visitor.home');
// Route::get('/baca/{id}', [VisitorController::class, 'showArticle'])->name('visitor.article.show');
// Route::get('/arsip-artikel', [VisitorController::class, 'archive'])->name('visitor.article.archive');
// Route::get('/tentang-kami', [VisitorController::class, 'about'])->name('visitor.about');

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\ArtikelController; 
use App\Http\Controllers\PenulisController; 
use App\Http\Controllers\KategoriArtikelController; 
use App\Http\Controllers\VisitorController;

// =========================================================================
// 1. AUTH & CMS ROUTES (Gunakan prefix /admin atau ubah url resource agar aman)
// =========================================================================
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest'); 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth'); 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth'); 

// Kelola Data Back-end (URL diubah sedikit agar tidak menabrak halaman depan visitor)
Route::resource('artikel', ArtikelController::class)->except(['show']);     
Route::resource('penulis', PenulisController::class)->except(['show']); 

// URL Resource admin diubah menjadi 'kelola-kategori' agar /kategori bisa dipakai murni oleh visitor
Route::resource('kelola-kategori', KategoriArtikelController::class, [
    'names' => [
        'index'   => 'kategori.index',
        'create'  => 'kategori.create',
        'store'   => 'kategori.store',
        'edit'    => 'kategori.edit',
        'update'  => 'kategori.update',
        'destroy' => 'kategori.destroy',
    ]
])->except(['show']);


// =========================================================================
// 2. VISITOR ROUTES (HALAMAN DEPAN - TANPA LOGIN)
// =========================================================================

// Tampilan 1: Halaman Utama Pengunjung
Route::get('/', [VisitorController::class, 'home'])->name('visitor.home');

// Tampilan 2: Halaman Detail Artikel
Route::get('/baca/{id}', [VisitorController::class, 'showArticle'])->name('visitor.article.show');

// Menu Artikel: Arsip Blog (12 Kolom)
Route::get('/arsip-artikel', [VisitorController::class, 'archive'])->name('visitor.article.archive');

// Menu Kategori: Filter Hub Hubungan Data Pengunjung (12 Kolom) - SEKARANG AMAN
Route::get('/kategori', [VisitorController::class, 'categories'])->name('visitor.kategori.index');

// Menu Tentang: Profil Penulis & Akses Login
Route::get('/tentang-kami', [VisitorController::class, 'about'])->name('visitor.about');
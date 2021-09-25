<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Livewire\F_index2;
use App\Http\Controllers\{FrontendController,
                          KategoriController,
                          ArtikelController, 
                          NavigasiController, 
                          PengaturanController, 
                          SliderController,
                          InboxController};
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
//     return view('frontend.index');
// });
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

    //Routing Halaman Kategori
    Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('kategori/create', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::post('kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::get('kategori/destroy/{id}',[KategoriController::class, 'destroy'])->name('kategori.destroy');

    //Routing Halaman Navigasi
    Route::get('navigasi', [NavigasiController::class, 'index'])->name('navigasi.index');
    Route::get('navigasi/create', [NavigasiController::class, 'create'])->name('navigasi.create');
    Route::post('navigasi/create', [NavigasiController::class, 'store'])->name('navigasi.store');
    Route::get('navigasi/edit/{id}', [NavigasiController::class, 'edit'])->name('navigasi.edit');
    Route::post('navigasi/edit/{id}', [NavigasiController::class, 'update'])->name('navigasi.update');
    Route::get('navigasi/destroy/{id}',[NavigasiController::class, 'destroy'])->name('navigasi.destroy');

    //Routing Halaman Slider
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('slider/create', [SliderController::class, 'store'])->name('slider.store');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('slider/edit/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('slider/destroy/{id}',[SliderController::class, 'destroy'])->name('slider.destroy');
    Route::get('slider/aktif/{id}',[SliderController::class, 'aktif'])->name('slider.aktif');
    Route::get('slider/nonaktif/{id}',[SliderController::class, 'nonaktif'])->name('slider.nonaktif');

    //Routing Halaman Pengaturan Web
    Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
    Route::get('pengaturan/create', [PengaturanController::class, 'create'])->name('pengaturan.create');
    Route::post('pengaturan/create', [PengaturanController::class, 'store'])->name('pengaturan.store');
    Route::get('pengaturan/edit/{id}', [PengaturanController::class, 'edit'])->name('pengaturan.edit');
    Route::post('pengaturan/edit/{id}', [PengaturanController::class, 'update'])->name('pengaturan.update');
    Route::get('pengaturan/destroy/{id}',[PengaturanController::class, 'destroy'])->name('pengaturan.destroy');

    //Routing Halaman Artikel
    Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel.index');
    Route::get('artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('artikel/create', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::post('artikel/edit/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::get('artikel/destroy/{id}',[ArtikelController::class, 'destroy'])->name('artikel.destroy');

    //Routing Inbox
    Route::post('/inbox', [InboxController::class, 'store'])->name('inbox.store');
    Route::get('inbox', [InboxController::class, 'index'])->name('inbox.index');
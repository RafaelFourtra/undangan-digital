<?php

use App\Http\Controllers\AmplopDigitalController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\CeritaCintaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InformasiAcaraController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProtokolController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemplatePesanController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\VidioController;
use App\Models\TemplatePesanModel;
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
    return redirect()->to('dashboard');
});

Route::get('/', function () {
    return redirect()->to('login');
});
Route::get('/wedding/{domain}/', [UndanganController::class, 'undanganShow'])->name('undangan.show');
Route::get('ucapan/{id}/', [UndanganController::class, 'ucapanShow'])->name('ucapan.show');
Route::post('ucapan/store/{id}/', [UndanganController::class, 'ucapanStore'])->name('ucapan.store');
Route::post('rsvp/store/{id}/', [UndanganController::class, 'rsvpStore'])->name('rsvp.store');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('master')->group(function () {
        Route::resource('tema', TemaController::class);
        Route::get('get', [TemaController::class, 'get'])->name('tema.get');
        Route::post('update-tema/{id}', [TemaController::class, 'UpdateTema'])->name('tema.update');

        Route::resource('musik', MusikController::class);
        Route::get('getMusic', [MusikController::class, 'get'])->name('musik.get');
    });

    Route::prefix('administrator')->group(function () {
        Route::resource('order', OrderController::class);
        Route::get('get', [OrderController::class, 'get'])->name('order.get');
    });

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('ucapan', [DashboardController::class, 'listUcapan'])->name('list.ucapan'); 
    });

    Route::prefix('undangan')->group(function () {
        Route::get('/', [UndanganController::class, 'index'])->name('undangan.index');

        Route::get('tema', [InformasiAcaraController::class, 'tema'])->name('informasiacara.tema');
        Route::post('tema/store', [InformasiAcaraController::class, 'temaStore'])->name('informasiacara.tema.store');

        Route::get('musik', [InformasiAcaraController::class, 'musik'])->name('informasiacara.musik');
        Route::get('musik/search', [InformasiAcaraController::class, 'musikSearch'])->name('informasiacara.musik.search');
        Route::post('musik/store', [InformasiAcaraController::class, 'musikStore'])->name('informasiacara.musik.store');

        Route::resource('galeri', GaleriController::class);
        Route::get('get', [GaleriController::class, 'get'])->name('galeri.get');
        Route::post('update-galeri/{id}', [GaleriController::class, 'UpdateGaleri'])->name('galeri.update');

        Route::resource('mempelai', MempelaiController::class);

        Route::get('informasiacara', [InformasiAcaraController::class, 'informasiacara'])->name('informasiacara.informasiacara');
        Route::post('informasiacara/store', [InformasiAcaraController::class, 'informasiacaraStore'])->name('informasiacara.informasiacara.store');

        Route::get('vidio', [VidioController::class, 'vidio'])->name('vidio.index');
        Route::post('vidio/store', [VidioController::class, 'vidioStore'])->name('vidio.store');
        Route::delete('vidio/delete/{id}', [VidioController::class, 'vidioDelete'])->name('vidio.delete');

        Route::get('ceritacinta', [CeritaCintaController::class, 'ceritacinta'])->name('ceritacinta.index');
        Route::post('ceritacinta/store', [CeritaCintaController::class, 'ceritacintaStore'])->name('ceritacinta.store');

        Route::get('quotes', [QuotesController::class, 'quotes'])->name('quotes.index');
        Route::post('quotes/store', [QuotesController::class, 'quotesStore'])->name('quotes.store');

        Route::post('protokol/store', [UndanganController::class, 'protokolStore'])->name('protokol.store');
        Route::post('publikasi/store', [UndanganController::class, 'publikasiStore'])->name('publikasi.store');
        Route::post('domain/update', [UndanganController::class, 'domainUpdate'])->name('domain.update');


        Route::get('bukutamu', [BukuTamuController::class, 'index'])->name('bukutamu.index');
        Route::post('bukutamu/store', [BukuTamuController::class, 'bukutamuStore'])->name('bukutamu.store');
        Route::get('bukutamu/jumlahtamu', [BukuTamuController::class, 'jumlahTamu'])->name('bukutamu.jumlahtamu');
        Route::get('bukutamu/get', [BukuTamuController::class, 'getTamu'])->name('bukutamu.get');

        Route::post('update-template-pesan', [TemplatePesanController::class, 'UpdateTemplatePesan'])->name('template.pesan.update');

        Route::get('bukutamu/edit/{id}', [BukuTamuController::class, 'edit'])->name('bukutamu.edit');
        Route::post('bukutamu/update', [BukuTamuController::class, 'bukutamuUpdate'])->name('bukutamu.update');

        Route::post('amlopdigital/store', [AmplopDigitalController::class, 'amplopdigitalStore'])->name('amplopdigital.store');
    });
});

require __DIR__ . '/auth.php';

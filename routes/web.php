<?php

use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/artikel', [ArmadaController::class, 'bloglist'])->name('bloglist');
Route::get('/armada', [ArmadaController::class, 'armada'])->name('armada');
Route::get('/paket-wisata', [ArmadaController::class, 'paketwisata'])->name('paketwisata');
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/', [ArmadaController::class, 'index'])->name('beranda');
Route::get('/detail-{slug}', [ArmadaController::class, 'paket'])->name('paket');
Route::get('/artikel-{slug}', [ArmadaController::class, 'blog'])->name('blog');
Route::get('/{slug}', [ArmadaController::class, 'show'])->name('armada');







Route::post('/send-email', [ContactController::class, 'send'])->name('send.email');



Route::get('/brand', function () {
    return view('brand');
})->name('brand');





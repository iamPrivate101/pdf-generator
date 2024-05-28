<?php

use App\Http\Controllers\leaflet;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('generate-pdf', [PdfController::class, 'generatePdf'])->name('generate-pdf');

Route::get('generate-qr', [QrCodeController::class, 'show']);

Route::get('leafletmap', [leaflet::class, 'nepalMap']);
Route::get('festival/{district?}', [leaflet::class, 'festival']);

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TunggakanController;
use App\Models\Tunggakan;
use Illuminate\Http\Client\Request as ClientRequest;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::resource('/', HomeController::class);
Route::get('/jtnow', [HomeController::class, 'jtnow']);
Route::get('/nosppl', [HomeController::class, 'nosppl']);
Route::get('/np2nosp2', [HomeController::class, 'np2nosp2']);
Route::get('/sp2outstanding', [HomeController::class, 'sp2outstanding']);
Route::get('/sp2permdok', [HomeController::class, 'sp2permdok']);
Route::get('/sp2sphp', [HomeController::class, 'sp2sphp']);
Route::get('/sp2lhp', [HomeController::class, 'sp2lhp']);


Route::resource('tunggakan', TunggakanController::class);

Route::get('/spt', function () {
    return Inertia::render('Spt');
});

Route::get('/lhp', function () {
    return Inertia::render('Lhp');
});

Route::get('/pkm', function () {
    return Inertia::render('Pkm');
});

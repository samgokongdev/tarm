<?php

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

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::resource('tunggakan', TunggakanController::class);

// Route::get('/tunggakan', function () {
//     return Inertia::render('Tunggakan', [
//         'tunggakans' => Tunggakan::query()
//             ->when(ClientRequest::input('search'), function ($query, $search) {
//                 $query->where('nama_wp', 'like', "%{$search}%");
//             })
//             ->paginate(10),
//     ]);
// });

Route::get('/lhp', function () {
    return Inertia::render('Lhp');
});

Route::get('/pkm', function () {
    return Inertia::render('Pkm');
});

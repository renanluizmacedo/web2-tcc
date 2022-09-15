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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('templates.middleware');
})->middleware(['auth'])->name('dashboard');

Route::resource('/clientes', '\App\Http\Controllers\ClienteController')
    ->middleware(['auth']);

require __DIR__.'/auth.php';

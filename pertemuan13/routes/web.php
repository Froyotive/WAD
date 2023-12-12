<?php

use App\Http\Controllers\UserController;
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
    return '<h1>selamat belajar laravel 10';
});

Route::get('/about', function() {

});

//membuat perkalian atau rumus sederhana
Route::get('/hasil', function(){
    return 2*5;
});

//menampilkan data di view
Route::get('/beritaapa', function () {
    return view ('beritaapa');
});

//menampilkan data di view di folder infotahunbaru
Route::get('/info', function(){
    return view ('infotahunbaru.info',['judul' => 'Sebentar Lagi Tahun Baru Ya Kan ??']);
});

Route::get('beritabaru2', function(){
    return view ('infotahunbaru.beritabaru2', [
        'judul' => 'Sebentar Lagi Tahun Baru Ya Kan ??',
        'tanggal' => date('d-m-y'),
    ]);
});

//Routing controller
Route::get('/user',[UserController::class, 'index']);
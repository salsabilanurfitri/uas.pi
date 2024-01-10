<?php
use App\Http\Controllers\bukucontroller;
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
    return view('welcome');
});
Route::resource('buku',bukucontroller::class);
Route::get('/buku/{id}/edit', 'BukuController@edit');
Route::delete('/buku/{id}', 'BukuController@destroy');

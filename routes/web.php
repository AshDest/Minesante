<?php

use App\Http\Livewire\Services;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Toto;

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
Auth::routes();

Route::get('/toto', [App\Http\Controllers\HomeController::class, 'toto'])->name('toto');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/provinces', [App\Http\Controllers\HomeController::class, 'province'])->name('province');
Route::get('/partenaires', [App\Http\Controllers\HomeController::class, 'partenaire'])->name('partenaire');
Route::get('/agents', [App\Http\Controllers\HomeController::class, 'agent'])->name('agents');
Route::get('/terme-refs', [App\Http\Controllers\HomeController::class, 'reference_term'])->name('reference_term');
Route::get('/participants/{reference_id}', [App\Http\Controllers\HomeController::class, 'participant'])->name('participant');
Route::get('/utilisateurs', [App\Http\Controllers\HomeController::class, 'utilisateurs'])->name('utilisateurs');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


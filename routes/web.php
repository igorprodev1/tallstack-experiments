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

Route::get('/', App\Http\Livewire\Home::class)->name('home');
Route::get('/login', App\Http\Livewire\Login::class)->name('login');
Route::get('/logout', App\Http\Livewire\Logout::class)->name('logout')->middleware('auth');
Route::get('/settings', App\Http\Livewire\Settings::class)->name('settings')->middleware('auth');
Route::get('/parser', App\Http\Livewire\ParserPage::class)->name('parser');

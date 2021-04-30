<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Item;
use App\Http\Livewire\Report;
use App\Http\Livewire\User\Create;
use App\Http\Livewire\User\Edit;
use App\Http\Livewire\User\Index;
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

Route::get('/dashboard', Dashboard::class)->name('dashboard.index');

Route::get('/user', Index::class)->name('user.index');
Route::get('/user/create', Create::class)->name('user.create');
Route::get('/user/edit', Edit::class)->name('user.edit');

Route::get('/item', Item::class)->name('item.index');
Route::get('/report', Report::class)->name('report.index');

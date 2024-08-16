<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Boards\Public\BoardShow;

Route::get('/', function () {
    return view('home');
});
Route::get('/board/{board}',BoardShow::class)->name('board:show');

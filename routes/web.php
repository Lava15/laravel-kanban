<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Boards\Public\BoardShow;

Route::get('/', function () {
    Auth::loginUsingId(1);
    return view('home');
});
Route::get('/board/{board}',BoardShow::class)->name('board:show');

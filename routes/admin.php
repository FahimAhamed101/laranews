<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LiveTvController;
Route::get('/test', function () {
    echo "Abhiram";
});

Route::get('/live-tv', [LiveTvController::class, 'index'])->name('live-tv');
Route::post('/live-tv/update', [LiveTvController::class, 'update'])->name('live-tv-update');
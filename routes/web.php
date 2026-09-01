<?php

use App\Http\Controllers\CallDocController;
use Illuminate\Support\Facades\Route;

// Tambahkan baris ini ke routes/web.php project Laravel kamu
Route::get('/calldoc', [CallDocController::class, 'index'])->name('calldoc.index');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/', [PageController::class, 'about'])->name('about');
Route::get('/', [PageController::class, 'contact'])->name('contact');
Route::get('/', [PageController::class, 'faq'])->name('faq');
Route::get('/', [PageController::class, 'partner'])->name('partner');

Route::prefix('service')
    ->name('service.')
    ->group(function () {
        Route::get('/', [PageController::class, 'service_get'])->name('service_get');
        Route::get('/', [PageController::class, 'service_detail'])->name('service_detail');
    });

Route::prefix('project')
    ->name('project.')
    ->group(function () {
        Route::get('/', [PageController::class, 'project_get'])->name('project_get');
        Route::get('/', [PageController::class, 'project_detail'])->name('project_detail');
    });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contact_post'])->name('contact.store');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/partner', [PageController::class, 'partner'])->name('partner');

Route::prefix('service')
    ->name('service.')
    ->group(function () {
        Route::get('/', [PageController::class, 'service_get'])->name('service_get');
        Route::get('/detail', [PageController::class, 'service_detail'])->name('service_detail');
    });

Route::prefix('project')
    ->name('project.')
    ->group(function () {
        Route::get('/', [PageController::class, 'project_get'])->name('project_get');
        Route::get('/detail', [PageController::class, 'project_detail'])->name('project_detail');
    });

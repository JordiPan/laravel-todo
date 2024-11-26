<?php

use Illuminate\Console\View\Components\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::post('/save', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::get('/isdone/{id}', [TodoListController::class, 'markDone'])->name('markDone');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManajemenAkun\ManajemenAkunController;
use App\Http\Controllers\Admin\ManajemenKonten\ManajemenKontenController;
use App\Http\Controllers\Admin\ManajemenKategori\ManajemenKategoriController;
use App\Http\Controllers\Konten\KontenController;


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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('Admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function (){
            Route::get('/', [AdminController::class, 'index']);
            Route::namespace('ManajemenAkun')
                ->prefix('manajemen-akun')
                ->name('manajemen-akun.')
                ->middleware('can:are-admin')
                ->group(function(){
                    Route::get('/', [ManajemenAkunController::class, 'index']);
                    Route::get('/create', [ManajemenAkunController::class, 'create']);
                    Route::post('/create/store', [ManajemenAkunController::class, 'store']);
                    Route::get('/update/{user}', [ManajemenAkunController::class, 'update']);
                    Route::post('/update/{user}/store', [ManajemenAkunController::class, 'updateStore']);
                    Route::post('/delete/{user}', [ManajemenAkunController::class, 'delete']);
                });
                Route::namespace('ManajemenKategori')
                ->prefix('manajemen-kategori')
                ->name('manajemen-kategori.')
                ->middleware('can:are-admin')
                ->group(function(){
                    Route::get('/', [ManajemenKategoriController::class, 'index']);
                    Route::get('/create', [ManajemenKategoriController::class, 'create']);
                    Route::post('/create/store', [ManajemenKategoriController::class, 'store']);
                    Route::get('/update/{kategori}', [ManajemenKategoriController::class, 'update']);
                    Route::post('/update/{kategori}/store', [ManajemenKategoriController::class, 'updateStore']);
                    Route::post('/delete/{kategori}', [ManajemenKategoriController::class, 'delete']);
                });
            Route::namespace('ManajemenKonten')
                ->prefix('manajemen-konten')
                ->name('manajemen-konten.')
                ->middleware('can:admin-user')
                ->group(function(){
                    Route::get('/', [ManajemenKontenController::class, 'index']);
                    Route::get('/create', [ManajemenKontenController::class, 'create']);
                    Route::post('/create/store', [ManajemenKontenController::class, 'store']);
                    Route::get('/update/{konten}', [ManajemenKontenController::class, 'update']);
                    Route::post('/update/{konten}/store', [ManajemenKontenController::class, 'updateStore']);
                    Route::post('/delete/{konten}', [ManajemenKontenController::class, 'delete']);
                });
                
        });

Route::namespace('Konten')
        ->prefix('konten')
        ->name('konten.')
        ->group(function(){
            Route::get('/', [KontenController::class, 'index']);
            Route::get('/detail/{slug}', [KontenController::class, 'detail']);
            Route::get('/detail', [KontenController::class, 'detailTest']);
            Route::get('/preview/{slug}', [KontenController::class, 'preview']);
            Route::get('/preview', [KontenController::class, 'previewTest']);
        });
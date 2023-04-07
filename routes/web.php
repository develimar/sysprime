<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Ti\AdminTiEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');


Route::get('/admin/ti/email/index', [AdminTiEmailController::class, 'index'])->name('admin.ti.email.index');
Route::get('/admin/ti/email/create', [AdminTiEmailController::class, 'create'])->name('admin.ti.email.create');
Route::post('/admin/ti/email/store', [AdminTiEmailController::class, 'store'])->name('admin.ti.email.store');

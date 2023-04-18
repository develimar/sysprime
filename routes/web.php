<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Ti\{
    AdminTiEmailController,
    GestaoSistemaController,
};

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

//Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');


Route::get('/admin/ti/email/index', [AdminTiEmailController::class, 'index'])->name('admin.ti.email.index');
Route::get('/admin/ti/email/create', [AdminTiEmailController::class, 'create'])->name('admin.ti.email.create');
//Route::post('/admin/ti/email/store', [AdminTiEmailController::class, 'store'])->name('admin.ti.email.store');


Route::get('/admin/ti/gestao_sistemas/index',[GestaoSistemaController::class, 'index'])->name('admin.ti.sistemas.index');
Route::get('/admin/ti/gestao_sistemas/create',[GestaoSistemaController::class, 'create'])->name('admin.ti.sistemas.create');
Route::post('/admin/ti/gestao_sistemas/store',[GestaoSistemaController::class, 'store'])->name('admin.sistemas.store');
Route::get('/admin/ti/gestao_sistemas/{id}/edit',[GestaoSistemaController::class, 'edit'])->name('admin.ti.sistemas.edit');
Route::put('/admin/ti/gestao_sistemas/{id}',[GestaoSistemaController::class, 'update'])->name('admin.ti.sistemas.update');
Route::delete('/admin/ti/gestao_sistemas/{id}', [GestaoSistemaController::class, 'destroy'])->name('admin.ti.sistema.destroy');
Route::get('/admin/ti/gestao_sistemas/{id}', [GestaoSistemaController::class, 'show'])->name('admin.ti.sistema.show');

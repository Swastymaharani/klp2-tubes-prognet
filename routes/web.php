<?php

// use App\Http\Controllers\CrudController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JenisDiklatController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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
//Route CRUD mahasiswa
Route::get('/crud',[CrudController::class,'index'])->name('crud.list');
Route::get('/crud/create',[CrudController::class,'create'])->name('crud.create');
Route::get('/crud/{id}/edit',[CrudController::class,'edit'])->name('crud.edit');
Route::delete('/crud/{id}',[CrudController::class,'deleteData'])->name('crud.delete');
Route::post('/crud/save', [CrudController::class,'save'])->name('crud.save');
Route::post('/crud/{id}/update',[CrudController::class,'update'])->name('crud.update');
Route::post('/crud/listData',[CrudController::class,'listData'])->name('crud.listData');

//Route CRUD pegawai
Route::get('/',function(){
    return redirect('/pegawai');
});
Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai.list');
Route::post('/pegawai/listData',[PegawaiController::class,'listData'])->name('pegawai.listData');
Route::get('/pegawai/create',[PegawaiController::class,'create'])->name('pegawai.create');
Route::get('/pegawai/{id}/edit',[PegawaiController::class,'edit'])->name('pegawai.edit');
Route::delete('/pegawai/{id}',[PegawaiController::class,'deleteData'])->name('pegawai.delete');
Route::post('/pegawai/save', [PegawaiController::class,'save'])->name('pegawai.save');
Route::post('/pegawai/{id}/update',[PegawaiController::class,'update'])->name('pegawai.update');

// Route CRUD Jenis Diklat
Route::get('/jenisdiklat',[JenisDiklatController::class,'index'])->name('jenisDiklat.list');
Route::post('/jenisdiklat/listdata',[JenisDiklatController::class,'listData'])->name('jenisDiklat.listData');
Route::get('/jenisdiklat/create',[JenisDiklatController::class,'create'])->name('jenisDiklat.create');
Route::get('/jenisdiklat/{id}/edit',[JenisDiklatController::class,'edit'])->name('jenisDiklat.edit');
Route::delete('/jenisdiklat/{id}',[JenisDiklatController::class,'deleteData'])->name('jenisDiklat.delete');
Route::post('/jenisdiklat/save', [JenisDiklatController::class,'save'])->name('jenisDiklat.store');
Route::post('/jenisdiklat/{id}/update',[JenisDiklatController::class,'update'])->name('jenisDiklat.update');

// Route CRUD Diklat
Route::get('/diklat',[DiklatController::class,'index'])->name('diklat.list');
Route::post('/diklat/listdata',[DiklatController::class,'listData'])->name('diklat.listData');
// Route::get('/crud/create',[DiklatController::class,'create'])->name('crud.create');
// Route::get('/crud/{id}/edit',[DiklatController::class,'edit'])->name('crud.edit');
// Route::delete('/crud/{id}',[DiklatController::class,'deleteData'])->name('crud.delete');
Route::post('/crud/simpan', [DiklatController::class,'simpan'])->name('crud.simpan');
Route::post('/crud/{id}/update',[DiklatController::class,'update'])->name('crud.updatediklat');
<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
Route::get('/create',[MahasiswaController::class,'create'])->name('create')->middleware('auth');
Route::post('store-mahasiswa',[MahasiswaController::class,'store'])->name('store')->middleware('auth');
Route::get('/read',[MahasiswaController::class,'read'])->name('read')->middleware('auth');
Route::get('/delete',[MahasiswaController::class,'delete'])->name('delete')->middleware('auth');
Route::get('/edit',[MahasiswaController::class,'edit'])->name('edit')->middleware('auth');
Route::get('/tampil1',[MahasiswaController::class,'tampil1'])->name('tampil1')->middleware('auth');
Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [AuthenticatedSessionController::class,'create'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class , 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/Teams' , [TeamsController::class , 'index'])->name('TeamsIndex');
Route::get('/CreateTeams' , [TeamsController::class , 'create'])->name('TeamsCreate');
Route::post('/StoreTeams' , [TeamsController::class , 'store'])->name('TeamsStore');
Route::get('/DeleteTeams/{id}' , [TeamsController::class , 'destroy'])->name('TeamsDelete');

Route::get('/DataDiris' , [DataDiriController::class , 'index'])->name('DataDiriIndex');
Route::get('/CreateDataDiri' , [DataDiriController::class , 'create'])->name('DataDiriCreate');
Route::post('/StoreDataDiri' , [DataDiriController::class , 'store'])->name('DataDiriStore');
Route::get('/DeleteDataDiri/{id}' , [DataDiriController::class , 'destroy'])->name('DataDiriDelete');
Route::get('/DownloadDataDiri/{id}' , [DataDiriController::class , 'download'])->name('DataDiriDownload');

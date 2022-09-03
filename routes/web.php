<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/Teams' , [TeamsController::class , 'index'])->name('TeamsIndex');
Route::get('/CreateTeams' , [TeamsController::class , 'create'])->name('TeamsCreate');
Route::post('/StoreTeams' , [TeamsController::class , 'store'])->name('TeamsStore');
Route::get('/DeleteTeams/{id}' , [TeamsController::class , 'destroy'])->name('TeamsDelete');

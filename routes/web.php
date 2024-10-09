<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpleadoController;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('empresas', EmpresaController::class);
    Route::resource('empleados', EmpleadoController::class);

    Route::get('empleado.pdf', 'App\Http\Controllers\EmpleadoController@pdf')->name('empleado.pdf');
    Route::get('empleado.download-pdf', 'App\Http\Controllers\EmpleadoController@downloadPdf')->name('empleado.downloadPdf');
});

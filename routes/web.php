<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PacienteController;

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

// Rutas para el controlador Doctor
Route::get('doctor', [DoctorController::class, 'index'])->name('doctor.vistadoctor');

// Rutas para el controlador Paciente
Route::get('paciente', [PacienteController::class, 'index'])->name('paciente.vistapaciente');

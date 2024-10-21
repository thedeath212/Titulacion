<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\AuthController;

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

// Redirige a la página de login de alumno al iniciar la aplicación
Route::get('/', function () {
    return redirect()->route('login.alumno');
});

// Rutas para el login de alumno e institución
Route::get('/login-alumno', [AuthController::class, 'showAlumnoLoginForm'])->name('login.alumno');
Route::post('/login-alumno', [AuthController::class, 'loginAlumno'])->name('login.alumno.submit');

Route::get('/login-institucion', [AuthController::class, 'showInstitucionLoginForm'])->name('login.institucion');

Route::post('/login-institucion', [AuthController::class, 'loginInstitucion'])->name('login.institucion.submit');

// Rutas para los dashboards de alumno e institución
Route::get('/dashboard-alumno', function () {
    return 'Bienvenido al dashboard de alumno';
})->name('dashboard.alumno');

Route::get('/dashboard-institucion', function () {
    return 'Bienvenido al dashboard de institución';
})->name('dashboard.institucion');

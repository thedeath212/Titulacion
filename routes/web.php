<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login.alumno');
});

// Rutas para el login de alumno e institución
Route::get('/login-alumno', [AuthController::class, 'showAlumnoLoginForm'])->name('login.alumno');
Route::post('/login-alumno', [AuthController::class, 'loginAlumno'])->name('login.alumno.submit');

Route::get('/login-institucion', [AuthController::class, 'showInstitucionLoginForm'])->name('login.institucion');
Route::post('/login-institucion', [AuthController::class, 'loginInstitucion'])->name('login.institucion.submit');

// Rutas para los dashboards (sin middleware)
Route::get('/dashboard/alumno', [AuthController::class, 'showAlumnoDashboard'])->name('dashboard.alumno');
Route::get('/dashboard/institucion', [AuthController::class, 'showInstitucionDashboard'])->name('dashboard.institucion');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Ruta para docentes
Route::get('/docentes', function () {
    return view('view.docentes'); // Asegúrate de que esta vista exista
})->name('docentes');

// Ruta para ver alumnos
Route::get('/alumnos', function () {
    return view('view.alumno'); // Asegúrate de que esta vista exista
})->name('alumnos');

// Ruta para cursos
Route::get('/cursos', function () {
    return view('view.cursos'); // Asegúrate de que esta vista exista
})->name('cursos');

// Ruta para planificación
Route::get('/planificacion', function () {
    return view('view.planificacion'); // Asegúrate de que esta vista exista
})->name('planificacion');

// Ruta para preguntas y respuestas
Route::get('/preguntas-respuestas', function () {
    return view('view.preguntas'); // Asegúrate de que esta vista exista
})->name('preguntas');

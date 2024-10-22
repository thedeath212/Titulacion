<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Institucion;

class AuthController extends Controller
{
    // Mostrar el formulario de login de Alumno
    public function showAlumnoLoginForm()
    {
        return view('auth.login-alumno');
    }
    public function loginAlumno(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'email' => 'required|email',
            'numero_documento' => 'required|min:8|max:12',
        ]);

        // Verificar si el alumno existe en la base de datos por su email
        $alumno = Alumno::where('alu_email', $request->email)->first();

        if (!$alumno) {
            return back()->withErrors(['message' => 'Usuario no existe, revise bien sus datos']);
        }

        // Verificar si el número de documento coincide con el del alumno
        if ($alumno->alu_numero_documento !== $request->numero_documento) {
            return back()->withErrors(['message' => 'Número de documento incorrecto']);
        }

        // Iniciar sesión manualmente
        session(['alumno_id' => $alumno->id]); // Almacena el ID del alumno en la sesión

        return redirect()->route('dashboard.alumno')->with('success', 'Logeado correctamente');  // Redirigir al dashboard del alumno
    }



    // Mostrar el formulario de login de Institución
    public function showInstitucionLoginForm()
    {
        return view('auth.login-institucion');
    }
    public function loginInstitucion(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        // Verificar si la institución existe en la base de datos por su email
        $institucion = Institucion::where('ins_email', $request->email)->first();

        if (!$institucion) {
            // Si no existe la institución con el email proporcionado
            return back()->withErrors(['message' => 'Institución no existe, revise bien sus datos']);
        }

        // Verificar si el teléfono coincide con el de la institución
        if ($institucion->ins_telefono !== $request->telefono) {
            // Si el teléfono no coincide
            return back()->withErrors(['message' => 'Número de teléfono incorrecto']);
        }

        // Si todo es correcto, proceder con la autenticación
        auth()->login($institucion);
        return redirect()->route('dashboard.institucion');  // Redirigir al dashboard de la institución
    }
    public function showAlumnoDashboard()
    {
        return view('dashboard.alumno'); // Asegúrate de que esto coincide con la ruta del archivo
    }
    public function showInstitucionDashboard()
    {
        return view('dashboard.institucion');  // Redirige a la vista del dashboard de institución
    }
    public function logout(Request $request)
    {
        // Cerrar sesión del usuario
        $request->session()->forget('alumno_id'); // Elimina el ID del alumno de la sesión

        return redirect()->route('login.alumno'); // Redirige a la página de inicio de sesión
    }
}

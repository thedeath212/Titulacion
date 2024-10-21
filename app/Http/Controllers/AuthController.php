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

    // Procesar el login de Alumno
    public function loginAlumno(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'email' => 'required|email',
            'numero_documento' => 'required',
        ]);

        // Verificar las credenciales del alumno
        $alumno = Alumno::where('alu_email', $request->email)
                        ->where('alu_numero_documento', $request->numero_documento)
                        ->first();

        if ($alumno) {
            auth()->login($alumno);
            return redirect()->route('dashboard.alumno');  // Redirigir al dashboard del alumno
        }

        return back()->withErrors(['message' => 'Credenciales incorrectas']);
    }

    // Mostrar el formulario de login de Institución
    public function showInstitucionLoginForm()
    {
        return view('auth.login-institucion');
    }

    // Procesar el login de Institución
    public function loginInstitucion(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        // Verificar las credenciales de la institución
        $institucion = Institucion::where('ins_email', $request->email)
                                  ->where('ins_telefono', $request->telefono)
                                  ->first();

        if ($institucion) {
            auth()->login($institucion);
            return redirect()->route('dashboard.institucion');  // Redirigir al dashboard de la institución
        }

        return back()->withErrors(['message' => 'Credenciales incorrectas']);
    }
}

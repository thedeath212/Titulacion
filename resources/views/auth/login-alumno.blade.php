<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alumno</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-form card p-4">
            <h1 class="text-center mb-4">Login Alumno</h1>

            <!-- Mostrar alert si hay errores -->
            @if($errors->has('message'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('message') }}
                </div>
            @endif

            <!-- Mostrar alerta de éxito -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.alumno.submit') }}" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" required 
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                           title="Por favor, ingresa un email válido.">
                    <div class="invalid-feedback">
                        Por favor, ingresa un email válido.
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="numero_documento">Número de Documento:</label>
                    <input type="text" name="numero_documento" class="form-control" id="numero_documento" required minlength="8" maxlength="12" pattern="\d+" 
                           title="El número de documento debe contener entre 8 y 12 dígitos">
                    <div class="invalid-feedback">
                        El número de documento debe contener entre 8 y 12 dígitos.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login como Alumno</button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('login.institucion') }}">¿Eres una institución? Inicia sesión aquí</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Validación del formulario con Bootstrap y JavaScript
        (function() {
            'use strict';
            var form = document.getElementById('loginForm');
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>
</body>
</html>

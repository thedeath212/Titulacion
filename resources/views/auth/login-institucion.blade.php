<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Institución</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-form card p-4">
            <h1 class="text-center mb-4">Login Institución</h1>

            <!-- Mostrar alert si hay errores -->
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <form action="{{ route('login.institucion.submit') }}" method="POST" id="loginInstitucionForm">
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
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" required minlength="7" maxlength="15"
                           pattern="\d{7,15}" title="El teléfono debe contener entre 7 y 15 dígitos numéricos.">
                    <div class="invalid-feedback">
                        El teléfono debe contener entre 7 y 15 dígitos numéricos.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login como Institución</button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('login.alumno') }}">¿Eres un alumno? Inicia sesión aquí</a>
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
            var form = document.getElementById('loginInstitucionForm');
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

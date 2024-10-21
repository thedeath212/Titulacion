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
            <form action="{{ route('login.alumno.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="numero_documento">Número de Documento:</label>
                    <input type="text" name="numero_documento" class="form-control" required>
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
</body>
</html>

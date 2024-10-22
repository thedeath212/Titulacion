<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Institución</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .header {
            background-color: #f8f9fa;
            /* Color de fondo del header */
            padding: 20px;
            /* Espaciado interno */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Sombra del header */
            position: relative;
            display: flex;
            /* Usar flexbox para centrar el contenido */
            justify-content: center;
            /* Centrar horizontalmente */
            align-items: center;
            /* Centrar verticalmente */
            flex-direction: row;
            /* Alinear los elementos en fila */
        }

        .logout-btn {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .nav-links {
            display: flex;
            /* Usar flexbox para alinear los enlaces */
        }

        .nav-links a {
            margin-right: 15px;
            /* Espaciado entre los enlaces */
            font-weight: bold;
            /* Texto en negrita */
            color: black;
            /* Color del texto negro */
        }

        .nav-links a:hover {
            color: #007bff;
            /* Color del texto al pasar el mouse (opcional) */
        }
    </style>
    </style>
    <header class="header">
        <div class="nav-links">
            <a href="{{ route('docentes') }}" class="btn btn-link">Docentes</a>
            <a href="{{ route('alumnos') }}" class="btn btn-link">Alumnos</a>
            <a href="{{ route('cursos') }}" class="btn btn-link">Cursos</a>
            <a href="{{ route('planificacion') }}" class="btn btn-link">Planificación</a>
            <a href="{{ route('preguntas') }}" class="btn btn-link">Preguntas</a>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="logout-btn">
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </button>
        </form>
    </header>

    <br>
    <br>
    <br>
</head>

<body>
    <div class="container mt-4">
        <h1>Bienvenido al Dashboard 
            Institución </h1>
        <p>Contenido del dashboard para alumnos aquí.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

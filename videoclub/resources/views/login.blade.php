<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>

    <!-- Formulario de Login -->
    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- Token CSRF para proteger el formulario -->
        
        <div>
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>

    <!-- Mostrar errores si hay alguno -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>

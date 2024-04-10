<!doctype html>
<html lang="en">
<head>
    <title>ProyectosGradoUSJ</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <style>
        .password-reset, .create-account {
            text-align: center;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .password-reset p, .create-account p {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
            margin-right: 10px;
        }

        .password-reset a {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .password-reset a:hover {
            background-color: #0056b3;
        }

        .create-account a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }

        .create-account button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .create-account button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info-section">
                <br>
                <h3 style="color: white;" class="title">ProyectosGradoUSJ</h3>
                <br>
                <br>
                <p style="color: white;">El presente repositorio institucional ha sido implementado con el objetivo de gestionar de forma eficiente los proyectos de grado desarrollados por los estudiantes de nuestra institución. Esta plataforma centralizada permitirá el almacenamiento organizado y la exhibición de los trabajos finales de los futuros graduados.</p>
            </div>
            <div class="login-section">
                <div class="logo">
                    <img src="{{ asset('assets/img/sanjose.png')}}" alt="Logo de la Institución">
                </div>
                <h2>Iniciar Sesión</h2>
                <form>
                    <div class="form-group">
                        <label for="username">Usuario</label>
                        <input type="text" id="username" placeholder="Ingrese Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <button type="submit">Ingresar</button>
                    <div class="create-account">
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="create-account">
                        <a href="{{ route('register') }}">¿No tienes una cuenta? Registrarse.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
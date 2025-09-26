

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo de busqueda -->
    <link href="..\assets\img\a.png" rel="icon">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-image:url("https://www.10wallpaper.com/wallpaper/1920x1080/1306/feather_football-Sports_HD_Widescreen_Wallpaper_1920x1080.jpg");
          
        }

        .logo {
            display: flex;
            justify-content: center;
            
           
        }

        .logo img {
            height: 160px;
            width: 190px;
        }

        .container {
           
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(91, 89, 89, 0.1); 
            backdrop-filter: blur(8px); 
            -webkit-backdrop-filter: blur(8px); 
}
        

        h2 {
            color: white;
            text-align: center;
            font-size: 200%;
             text-shadow: 1px 1px 2px black;
        }

        label {
            color: white;
               text-shadow: 1px 1px 2px black;
        }

        .btn-primary {
            background-color: #1f3d7a;
            border-color: #1f3d7a;
        }

        .btn-primary:hover {
            background-color: #0d264f;
            border-color: #0d264f;
        }

        a {
            color: #1f3d7a;
            text-decoration: none;
        }

        a:hover {
            color: #0d264f;
        }
        p{
    color: white;
               text-shadow: 1px 1px 2px black;  
        }
        p a{
    color: blue;
               text-shadow: 1px 1px 2px black;  
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="../../assets/img/a.png" alt="DSFC">
        </div>
        <h2 class="mt-5">Iniciar Sesión</h2>

        <!-- Mensaje dinámico -->
       

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Ingresa con tu correo registrado">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required placeholder="Recuerda tu contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <button class="btn btn-primary" onclick="window.location.href='../../index.php'">Volver</button>
        </form>

        <p class="mt-3">¿Olvidaste tu contraseña? <a href="restablecer_contrasena.php">Restablecer contraseña</a></p>
        <p class="mt-3">¿No tienes cuenta? <a href="registro.php">Registrar</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
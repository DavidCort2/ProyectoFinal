<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <title>Proyecto SM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            window.onload = function () {
                document.getElementById('loader').style.display = 'none';
            };
        });
    </script>
</head>
<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>
<header>
    <!-- Barra superior -->
    <div class="top-bar">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="contact-info">
                    <i class="bi bi-envelope-fill"></i> contacto@proyecto.com 
                    <span class="separator">|</span>
                    <i class="bi bi-telephone-fill"></i> +123 456 789
                </div>
                <div class="social-icons">
                    <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-whatsapp"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar flotante -->
<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/img/logo.png" alt="Logo" class="logo-nav me-2">
            <span>Proyecto SM</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#sobre-nosotros">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#planes">Planes</a></li>
                <li class="nav-item"><a class="nav-link" href="#beneficios">Beneficios</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="startDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Iniciar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="startDropdown">
                        <li><a class="dropdown-item" href="#">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="#">Registrarse</a></li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
    </div>
</nav>

</header>

    <main>


<script src="assets/js/indexcontroller.js"></script>
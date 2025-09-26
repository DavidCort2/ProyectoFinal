
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo de busqueda -->
    <link href="../img/logo2.png" rel="icon">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
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
            margin: 0 auto;
        }

        .container {
           
            margin-top: 10px;
            padding: 10px;
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
    <!-- MODAL INFORMATIVO DE BIENVENIDA -->
<div class="modal fade" id="bienvenidaModal" tabindex="-1" aria-labelledby="bienvenidaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bienvenidaModalLabel">Bienvenido al registro</h5>
      </div>
      <div class="modal-body">
        <p>Bienvenido al registro de usuario. Aquí podrás:</p>
        <ul>
          <li>Registrarte con tus datos.</li>
          <li>Seleccionar la cantidad de deportistas a registrar.</li>
          <li>Elegir un metodo de pago y seguir las instrucciones para habilitar tu cuenta.</li>
          <li>Inscribir a tus deportistas al club y tener diferentes interacciones.</li>
        </ul>
        <p>¿Como inscribirse?</p>
        <ul>
          <li>Ingresa tus datos personales en el formulario</li>
          <p style="color: red;">TU CONTRASEÑA DEBE TENER NUMEROS Y MINIMO 8 CARACTERES</p>
          <li>Al darle al boton enviar te abre una ventana donde debes elegir el numero de deportistas que vas a registrar</li>
          <li>Selecciona el metodo de pago y ten en cuenta el valor de la in    scripcion, sigue los pasos para finalizar tu registro</li>
          <li>Una vez hecho esto tu cuenta sera registrada, pero NO habilitada</li>
          <p style="color: red;">DEBES DE REALIZAR EL PAGO DE TU INSCRIPCION PARA PODER INGRESAR</p>
          <li>Una vez hecho el pago, ingresa con tu correo y contraseña, lee el mensaje de la ventana igual a esta cuando ingreses</li>
        </ul>
        <p>¡Esperamos que tengas una excelente experiencia en la escuela!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>

<!-- cuerpo de la pagina -->
    <div class="container">
        <div class="logo">
          <img src="../../assets/img/a.png" alt="DSFC">
        </div>
        <h2 class="mt-5">Registro de Usuario</h2>
        <p class="logo"><strong>Registrate ¡Te estamos esperando!</strong></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    echo htmlspecialchars($_SESSION['error']); 
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>
            <div class="form-group">
                <label for="nombre">Nombre y Apellido:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre completo del acudiente">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Correo electronico del acudiente">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required placeholder="Contraseña para iniciar sesion">
                <span style="color: white; font-size: 0.8em;">Usa minimo 8 caracteres, una mayuscula,un numero y un caracter especial(,*+/)</span>
            </div>
            <div class="form-group">
                <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required placeholder="Confirma tu contraseña/antes de enviar revisala">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="mostrar_contrasena">
                <label class="form-check-label" for="mostrar_contrasena">Mostrar contraseñas</label>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ingresa el numero de contacto del acudiente">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            
            <!-- Botón "Volver" con evento onclick -->
            <button class="btn btn-primary" onclick="window.location.href='../../index.php'">Volver</button>
        </form>
        <p class="mt-3">¿Ya tienes cuenta? <a href="iniciar.php">Inicia sesión</a></p>
    </div>

   
<!-- Modal para seleccionar deportistas -->
<div class="modal fade" id="modalDeportistas" tabindex="-1" role="dialog" aria-labelledby="modalDeportistasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeportistasLabel">Seleccionar cantidad de deportistas y metodo de pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDeportistas" action="../php/pago_inscripcion.php" method="POST">
                    <div class="form-group">
                        <label for="cantidad">Cantidad de deportistas a registrar:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
                    </div>
                    <!-- Selección del método de pago -->
                    <div class="form-group">
                        <label for="metodo_pago">Método de pago:</label>
                        <select class="form-control" id="metodo_pago" name="metodo_pago" required>
                            <option value="" disabled selected>Selecciona un método</option>
                            <?php foreach($metodos_pago as $metodo): ?>
                                <option value="<?= htmlspecialchars($metodo['id_metodo']) ?>" data-tipo="<?= htmlspecialchars($metodo['tipo']) ?>">
                                    <?= htmlspecialchars($metodo['nombre_entidad']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Cálculo total -->
                    <div class="form-group">
                        <p id="total">Total: $0</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Continuar al pago</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const modalMostrado = localStorage.getItem('modalMostrado');

    if (!modalMostrado) {
      const modal = new bootstrap.Modal(document.getElementById('bienvenidaModal'));
      modal.show();
      localStorage.setItem('modalMostrado', 'true');
    }
  });
</script>

    <script>
        document.getElementById('mostrar_contrasena').addEventListener('change', function() {
            const contrasena = document.getElementById('contrasena');
            const confirmarContrasena = document.getElementById('confirmar_contrasena');
            if (this.checked) {
                contrasena.type = 'text';
                confirmarContrasena.type = 'text';
            } else {
                contrasena.type = 'password';
                confirmarContrasena.type = 'password';
            }
        });

        // Calcular el costo total en tiempo real
        const cantidadInput = document.getElementById('cantidad');
        const totalText = document.getElementById('total');
        const costoPorDeportista = <?= $costo_inscripcion ?>;

        cantidadInput.addEventListener('input', () => {
            const cantidad = parseInt(cantidadInput.value) || 0;
            const total = cantidad * costoPorDeportista;
            totalText.textContent = `Total: $${total.toLocaleString()}`;
        });
    </script>
</body>
</html>
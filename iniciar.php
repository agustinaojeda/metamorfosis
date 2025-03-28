<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="media/logo n.svg" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Inicio de Sesión</title>
  </head>
  <body>
    <div class="container">
      <div class="izq">
        <img src="media/logo n.svg" alt="" class="logo" />
        <h2>¿Sos miembro?</h2>
   
        <form action="login.php" method="POST">
          <input type="password" name="password" required />
          <button type="submit">Ingresar</button>
        </form>

        <?php if (isset($_SESSION['error'])): ?>
            <p class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
          <?php endif; ?>

        <a
          href="https://api.whatsapp.com/send?phone=542604598220&text=Hola%2C%20quiero%20ser%20parte%20de%20Metamorfosis!"
           target="_blank">¿Aún no sos parte? <b>Quiero serlo</b></a
        >
      </div>
      <div class="der">
        <img src="media/img1.jpeg" alt="" />
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>

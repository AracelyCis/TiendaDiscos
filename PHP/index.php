<!DOCTYPE html>
<html>
<head>
  <title>Formulario de inicio de sesión</title>
  <link rel="stylesheet" type="text/css" href="../CSS/estiloslogin.css">
</head>
<body>
  <div class="login-form">
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Nombre de usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Iniciar sesión</button>
    </form>
  </div>
</body>
</html>
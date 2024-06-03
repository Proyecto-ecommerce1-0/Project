<?php
session_start();
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $usuario = $_POST['usrname'];
    $cedula = $_POST['ci'];
    $nueva_contrasena = $_POST['psw'];
    $confirmar_contrasena = $_POST['confirm_psw'];

    // Verificar que la contraseña y la confirmación coincidan
    if ($nueva_contrasena != $confirmar_contrasena) {
        $error = "La contraseña y la confirmación no coinciden.";
    } else {
        // Conectar a la base de datos (reemplaza los valores con los de tu configuración)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "santa_eduviges";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta para verificar si el usuario y la cédula existen en la base de datos
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND cedula = '$cedula'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // El usuario y la cédula coinciden, actualizar la contraseña en la base de datos
            $row = $result->fetch_assoc();
            $id_usuario = $row['id_usuario']; // Suponiendo que hay un campo 'id' en tu tabla de usuarios

            // Actualizar la contraseña
            $sql_update = "UPDATE usuarios SET contraseña = '$nueva_contrasena' WHERE id_usuario = $id_usuario";
            if ($conn->query($sql_update) === TRUE) {
                // Contraseña actualizada exitosamente
                echo "Contraseña actualizada exitosamente.";
            } else {
                echo "Error al actualizar la contraseña: " . $conn->error;
            }
        } else {
            // El usuario o la cédula no coinciden en la base de datos
            $error = "El usuario o la cédula no existen en la base de datos.";
        }

        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'
    rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    
<div class="form-container">
  <div class="col col-1">
    <div class="image-layer">
      <img src="img/full-moon.png" class="form-image-main fi-2" alt="">
    </div>
  </div>

  <div class="col col-2">
    <!--Formulario de Inicio de Sesion-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">    
      <div class="login-form show">
        <div class="form-title">
          <span>Change Password</span>
        </div>
        <div class="form-inputs">
          <div class="input-box">
            <input type="text" class="input-field" value="Usuario" placeholder="Usuario" id="usrname" name="usrname" required>
            <i class="bx bx-user icon"></i>
          </div>
          <div class="input-box">
            <input type="text" class="input-field" value="" placeholder="Cedula de Identidad (C.I)" id="ci" name="ci" required>
            <i class="bx bx-id-card icon"></i>
          </div>
          <div class="input-box">
            <input type="password" class="input-field" value="" placeholder="Contraseña Nueva" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número, una letra mayúscula y una letra minúscula, y al menos 8 caracteres" required>
            <i class="bx bx-lock-alt icon"></i>
          </div>
          <div class="input-box">
            <input type="password" class="input-field" value="" placeholder="Confirmar Contraseña" id="confirm_psw" name="confirm_psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número, una letra mayúscula y una letra minúscula, y al menos 8 caracteres" required>
            <i class="bx bx-lock-alt icon"></i>
          </div>
          <div class="input-box">
            <input class="input-submit" type="submit" value="Submit">
            <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; }?>
          </div>
        </div>

        <div class="forget-pass">
          <a class="btn btn-2" href="login.php">Iniciar Sesion</a>
        </div>
      </div>
    </form>
  </div>
</div>


<script src="script.js"></script>
</body>
</html>
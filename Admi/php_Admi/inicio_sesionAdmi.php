<?php

session_start();

include 'conexionBD_admi.php';


$correo = $_POST['correo'];

$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE Correo= '$correo' and Contrasena='$contrasena' " );

if(mysqli_num_rows($validar_login) > 0){

$_SESSION['usuario']= $correo;

    header("location:/Project_nuevo/Admi/Dashboard_admi/indexadmi.php");
  
}
else{
    echo '<script>
   alert("Usuario no existe, verifique los datos introducidos");
   window.location = "/Project_nuevo/Admi/Login_admi.php";
    </script>
    ';
    exit;
}

?>
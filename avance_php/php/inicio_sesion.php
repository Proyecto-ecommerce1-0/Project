<?php

session_start();

include 'conexión_BD.php';


$correo = $_POST['correo'];

$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM cliente WHERE Correo= '$correo' and Contrasena='$contrasena' " );

if(mysqli_num_rows($validar_login) > 0){

$_SESSION['usuario']= $correo;

    header("location:../Dashboard%20dos/index.php");
  
}
else{
    echo '<script>
   alert("Usuario no existe, verifique los datos introducidos");
   window.location = "../Login/Login.php";
    </script>
    ';
    exit;
}

?>
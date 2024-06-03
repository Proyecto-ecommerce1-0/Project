<?php

include 'conexión_BD.php';
$query="SELECT id, nombre, precio FROM producto WHERE status = 1; ";
$result=$conexion->query($query);


?>
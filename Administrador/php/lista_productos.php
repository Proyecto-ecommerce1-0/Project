<?php

require_once 'conexionBD.php'; // Incluye el archivo de conexión a la base de datos


$query = "SELECT * FROM productoss";
$stmt = $conexion->prepare($query);
$stmt->execute();
$productos = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$conexion->close();

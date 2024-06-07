<?php
session_start();

include 'enviar_token.php'; ;

// Verificar que se hayan enviado las contraseñas
if (!isset($_POST['nueva_contraseña']) || !isset($_POST['confirmar_contraseña'])) {
    die('Error: falta información');
}
$correo = $_POST['correo'];
$nueva_contrasena = $_POST['nueva_contraseña'];
$confirmar_contrasena = $_POST['confirmar_contraseña'];

// Verificar que la contraseña y la confirmación coincidan
if ($nueva_contrasena != $confirmar_contrasena) {
    $error = "La contraseña y la confirmación no coinciden.";
} else {
    // Conectar a la base de datos (reemplaza los valores con los de tu configuración)
    require_once '../php/conexión_BD.php'; // Cambia la ruta y el nombre del archivo según sea necesario

    // Verificar que la conexión se haya establecido correctamente
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    // Obtener el ID de usuario desde la base de datos utilizando el correo electrónico
    $sql_usuario = "SELECT Id_cliente FROM cliente WHERE Correo_electronico = ?";
    $stmt = $conn->prepare($sql_usuario);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if ($row) {
        $id_usuario = $row['Id_cliente'];

        // Actualizar la contraseña
        $sql_update = "UPDATE cliente SET Contrasena = ? WHERE Id_cliente = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("si", $nueva_contrasena, $id_usuario);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Contraseña actualizada exitosamente
            echo "Contraseña actualizada exitosamente.";
        } else {
            $error = "Error al actualizar la contraseña. Inténtalo de nuevo.";
        }
    } else {
        $error = "No se encontró un usuario con ese correo electrónico.";
    }

    $conexion->close();
}

    /*Obtener el ID de usuario desde la sesión
    if (!isset($_SESSION['id_usuario'])) {
        die('Error: no se ha iniciado sesión');
    }
    $id_usuario = $_SESSION['id_usuario'];

    // Actualizar la contraseña
    $sql_update = "UPDATE cliente SET Contrasena = ? WHERE Id_cliente = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("si", $nueva_contrasena, $id_usuario);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Contraseña actualizada exitosamente
        echo "Contraseña actualizada exitosamente.";
    } else {
        $error = "Error al actualizar la contraseña. Inténtalo de nuevo.";
    }

    $conexion->close();
}*/

?>



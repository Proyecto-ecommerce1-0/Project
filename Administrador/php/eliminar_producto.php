<?php
require_once 'conexionBD.php'; // Incluye el archivo de conexión a la base de datos

if (isset($_GET['id'])) {
    $Id_producto = $_GET['id'];

    // Consulta para obtener la ruta de la imagen del producto
    $query = "SELECT Imagen FROM productoss WHERE Id_producto =?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $Id_producto);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $fila = $resultado->fetch_assoc();
    $ruta_imagen = $fila['Imagen'];


    // Consulta para eliminar el producto de la base de datos
    $query = "DELETE FROM productoss WHERE Id_producto =?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $Id_producto);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo '
        <script>
            alert("Producto eliminado exitosamente");
            window.location = "../productos.php";
        </script>';
    } else {
        echo '
        <script>
            alert("Ha ocurrido un error al eliminar el producto");
            window.location = "../productos.php";
        </script>';
    }
}

$conexion->close();
?>

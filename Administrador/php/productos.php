<?php

require_once 'conexionBD.php'; // Incluye el archivo de conexión a la base de datos

if (isset($_POST['agregar_producto'])) {
    $nombre_producto = $_POST['nombre-producto'];
    $codigo_producto = $_POST['codigo-producto'];
    $descripcion_corta = $_POST['descripcion-corta'];
    $descripcion_larga = $_POST['descripcion-larga'];
    $precio_producto = $_POST['precio-producto'];
    $status_producto = $_POST['status-producto'];

    // Subir imagen
    $imagen = $_FILES['imagen'];
    $ruta_imagen = 'Imagenes/Productos_Subidos/' . uniqid() . '_' . $imagen['name'];
    move_uploaded_file($imagen['tmp_name'], '../' . $ruta_imagen);

    // Insertar datos en la base de datos
    $query = "INSERT INTO productoss (Nombre, Codigo, Descripcion_corta, Descripcion_larga, Precio, Status_producto, Imagen) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("sssssss", $nombre_producto, $codigo_producto, $descripcion_corta, $descripcion_larga, $precio_producto, $status_producto, $ruta_imagen);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo '
        <script>
            alert("Producto registrado exitosamente");
            window.location = "../productos.php";
        </script>';
    }else{
        echo '
        <script>
            alert("Ha ocurrido un error al registrar el producto");
            window.location = "../productos.php";
        </script>';
    }
}

$conexion->close();
?>

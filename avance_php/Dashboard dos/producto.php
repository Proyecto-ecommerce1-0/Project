<?php
// ...

// Obtener el ID del producto pasado por la URL
$id_producto = $_GET['id'];

// Verificar si el ID del producto coincide con el ID pasado por la URL
if ($producto['Id_producto'] == $id_producto) {
    // Mostrar la información del producto
    ?>
    <main class="container">
        <!-- ... -->
    </main>
    <?php
} else {
    // No mostrar nada si el ID del producto no coincide
    echo "No se encontró el producto";
}
?>

<?php 
// Conecta a la base de datos 
$conexion = mysqli_connect("localhost", "root", "", "bd_actualizada");

// Verifica la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$query = "SELECT Id_producto, Nombre, Precio, Descripcion_corta, Descripcion_larga FROM productos WHERE status = 'Disponible'";

// Ejecuta la consulta
$resultado = mysqli_query($conexion, $query);

// Verifica si hay resultados
if (mysqli_num_rows($resultado) > 0) {
    // Guarda el resultado en una variable
    $productos_activos = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $productos_activos[] = $fila;
    }
} else {
    $productos_activos = array(); // No hay productos activos
}

// Cierra la conexión
mysqli_close($conexion);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="producto.css">
    <title>libre de color negro</title> 
    <link rel="icon" href="imagenes/favicon.ico">
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
</head>
<body>

    <header>
            <div class="header container">
                <h1 class="logo"><img src="imagenes/logo-removebg-preview.png" alt="logo"></h1>
    
                <nav>
                    <ul class="menu-nav">
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Oficina</a></li>
                        <li><a href="">Prescolar</a></li>
                        <li><a href="">Primaria</a></li>
                        <li><a href="">Secundaria</a></li>
                                   
                    </ul>
                </nav>
                <div class="menu-hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div>
    
    
                <div class="carrito">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="count-products-cart">0</div>
                </div>
    
            </div>
            <div class="menu-responsive">

                <h1 class="Logo-responsive"><img src="imagenes/logo-removebg-preview.png" alt="logo"></h1>
    
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Doloribus a voluptates, beatae, voluptatum reiciendis labore 
                saepe repellendus temporibus quaerat error hic illo autem nobis?
                </p>
            <div class="container-social-responsive">
                <a href="#"  class="Facebook">
                    <i class="fa-brands fa-facebook"></i>
    
                </a>
                <a href="#"  class="Instagram">
                    <i class="fa-brands fa-instagram"></i>   
                </a>
                <a href="#"  class="Whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
            <nav>
                <ul class="menu-nav-responsive">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Oficina</a></li>
                    <li><a href="#">Prescolar</a></li>
                    <li><a href="#">Primaria</a></li>
                    <li><a href="#">Secundaria</a></li>
                </ul>
            </nav>
            <div class="btn-close-responsive">
                <i class="fa-solid fa-xmark"></i>
            </div>
            </div>
            <div id="overlay"></div> 

    </header>
    <?php foreach ($productos_activos as $producto) { ?>
    <main class="container">
    <div class="imagen-producto">
    <?php 
    $id= $producto['Id_producto'];
    $imagen="../images/productos/$id/negro01.jpg";
    if(!file_exists($imagen)){
        $imagen="../images/nofotos/no_fotos.jpg";
    }
     ?>
       <img src="<?php echo $imagen ?>" alt="Producto-Relacionado">
    </div>

    <div class="container-details-product">
        <div class="aside-details-product">
            <div class="header-details-product">
                <h1><?= $producto['Nombre']?></h1>
                <div class="row">
                    <div class="share">
                        <button class="btn">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            <p>Compartir</p>
                        </button>
    
                        <button class="btn">
                            <i class="fa-solid fa-heart"></i>
                            <p>Guardar</p>
                        </button>
                    </div>
                </div>
            </div>
    
    
            <div class="info-details-product">
                <div class="container-acordeon">
                    <button class="acordeon-button active">
                        Descripcion
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="acordeon-content">
                        <p>
                        <?= $producto['Descripcion_corta']?>
                        </p>
                    </div>
                </div>
    
                <div class="container-acordeon">
                    <button class="acordeon-button active">
                        Caracteristicas
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="acordeon-content">
                       
                        <ul>
                            <li>Bueno</li>
                            <li>Bonito</li>
                            <li>Barato</li>
                        </ul>
                    </div>
                </div>
    
                <div class="container-acordeon">
                    
                    <div class="acordeon-content">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Ex numquam illum, vel, nam voluptatum dolore error, 
                            molestias cupiditate quos et qui adipisci autem impedit mollitia.
                            Eveniet autem assumenda vitae ab?
                        </p>
                    </div>
                </div>
    
                <div class="container-acordeon">
                    <button class="acordeon-button active">
                        Preguntas Frecuentes
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="acordeon-content">
                       <ul>
                        <li>All full-priced, unworn items, with tags attached and in their 
                            original packaging are eligible for return or exchange within 30 days of placing your order. </li>
                        <li>Please note, packs must be returned in full. 
                            We do not accept partial returns of packs.</li>
                        <li>Want more info about shipping, materials or care instructions? Here!</li>
                       </ul>
                    </div>
                 </div>
            </div>
            <div class="body-details-product">
            <div class="info-product">
                <h2>Detalles del Producto</h2>
                <div class="info">
                    <p>
                    <?= $producto['Descripcion_larga']?>
                    </p>
                    <p>
                        The St. Louis Meramec Canoe Company was founded by Alfred Wickett in 1922. 
                        Wickett had previously worked for the Old Town Canoe Co from 1900 to 1914. 
                        Manufacturing of the classic wooden canoes in Valley Park, Missouri ceased in 1978. 
                    </p>
                    <ul>
                        <li>Natural color, 100% premium combed organic cotton </li>
                        <li>Regular fit, mid-weight t-shirt</li>
                    </ul>
                        </div>
    
    
    
                        <div class="container-card-payment">
                            <div class="card-payment">
                                <div class="header">
                                    <p class="price">$<?= $producto['Precio']?></p>
                                    
                                    <p class="count-reviews">
                                        <i class="fa-solid fa-star"></i>
                                        4.9 -
                                        <span> 142 reseñas</span>
                                    </p>
                                </div>
                                <div class="colors">
                                    <p>color: <span 
                                        id=value-color>Negro</span></p>
                                    <div class="row-colors">
                                    <div 
                                        class="container-color 
                                        color-black selected" 
                                        data-color="negro">
                                    </div>
                                    <div 
                                        class="container-color 
                                        color-purple" 
                                        data-color="morado">
                                    </div>
                                    <div
                                         class="container-color 
                                         color-white" 
                                         data-color="blanco">
                                    </div>
                                    <div 
                                        class="container-color 
                                        color-pink" 
                                        data-color="rosado">
                                    </div>
                                </div>
                                
                                </div>
                                <div class="quantity">
                                    <div class="container-add-quantity">
                                        <div class="add-quantity">
                                            <button class="btn-minus" id="btn-decrement">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                            <span id="count-product">1</span>
                                            <button class="btn-plus" id="btn-increment">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                        <button class="btn-add-to-cart">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            Añadir Carrito
                                        </button>
                                    </div>
                                    <div class="info-quantity">
                                        <div class="price-tax">
                                            <p>$10,00 x <span 
                                                id="quantity-product">1
                                            </span></p>
                                            <p>Impuesto Estimado</p>
                                            <div class="value">
                                                <p>$11,00</p>
                                                <p>$0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total">
                                        <span>Total</span>
                                        <div class="price-total">$11,00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

    </main>

    <footer>
         
        <div class="container footer">
           
                <h1 class="logo-footer"><img src="imagenes/logo-removebg-preview.png" alt="logo"></h1>

                <div class="container-social">
                <a href="#"  class="Facebook">
                    <i class="fa-brands fa-facebook"></i>
                    <span>Facebook</span>
                </a>
                <a href="#"  class="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                    <span>Instagram</span>
                </a>
                <a href="#"  class="Whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Whatsapp</span>
                </a>
        </div>

        <div class="user-footer">
            <ul>
                <li><a href="#">Mi Cuenta</a></li>
                <li><a href="#">Registrate</a></li>
                <li><a href="#">Contactanos</a></li>
            </ul>
        </div>
        <div class="container-policies">
            <ul>

                <li><a href="#">Politica de privacidad</a></li>
                <li><a href="#">Politica de Devolucion</a></li>
                <li><a href="#">Politica de Comprar</a></li>
                <li><a href="#">Preguntas Frecuentes</a></li>
            </ul>
        </div>
       </div> 

    </footer>
    <script src="producto.js"></script>
</body>

</html>
</html>

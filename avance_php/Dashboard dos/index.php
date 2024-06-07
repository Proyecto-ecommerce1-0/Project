<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>
    alert("Por Favor, Iniciar Sesión");
    window.location = "../Login/Login.php"
     </script>
     ';
     session_destroy();
     die();
}


?>
<?php

require "../php/token_productos.php";
// Conecta a la base de datos 
$conexion = mysqli_connect("localhost", "root", "", "bd_actualizada");

// Verifica la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL
$query = "SELECT Id_producto, Nombre, Precio, Descripcion_corta FROM productos WHERE status = 'Disponible'";

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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta 
    name="viewport" 
    content="width=device-width, initial-scale=1.0"
    />
    <title>Tina Creativa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagenes/favicon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="oficina.php">Oficina</a></li>
                    <li><a href="prescolar.php">Prescolar</a></li>
                    <li><a href="primaria.php">Primaria</a></li>
                    <li><a href="secundaria.php">Secundaria</a></li>
                               
                </ul>
            </nav>
            <div class="menu-hamburger">
                <i class="fa-solid fa-bars"></i>
            </div>


            <div class="heart">
                <i class="fa-solid fa-heart" style="color: #ec3500;"></i>
            </div>

            <div class="carrito">
                <label for="usuario-icono">
                    <i class="fa-solid fa-user" id="usuario-icono" name="usuario-icono"></i></label>
                <div class="opciones-usuario" id="opciones-usuario">
                  <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="../php/cerrar_sesion.php">Cerrar Sesión</a></li>
                  </ul>
                </div>
              </div>

              <script>
                const usuarioIcono = document.getElementById('usuario-icono');
                const opcionesUsuario = document.getElementById('opciones-usuario');

            usuarioIcono.addEventListener('click', () => {
             opcionesUsuario.classList.toggle('mostrar'); /* Agregamos o quitamos la clase mostrar */
            });

            document.addEventListener('click', (e) => {
            if (!e.target.closest('.carrito')) { /* Si el clic no es dentro del elemento .carrito */
                opcionesUsuario.classList.remove('mostrar'); /* Ocultamos las opciones */
            }
            });
              </script>

            <!--Icono -->
<i class='bx bxs-cart-alt' id="cart-icon" ></i> 

            <!--Carrito-->
<div class="cart" >
    <h2><div class="cart-title">Tu Carrito</div></h2>

            <!--Contenido -->
    <div class="cart-content" >
     
    </div>

          <!--Total-->
    <div class="total">
        <div class="total-tittle">Total</div>
        <div class="total-price">$0</div>
    </div>
         <!--Comprar-->
    <button type="button" class="btn-buy">Comprar Ahora</button>

    <i class="fa-solid fa-xmark" id="close-cart"></i>    

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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="oficina.php">Oficina</a></li>
                <li><a href="prescolar.php">Prescolar</a></li>
                <li><a href="primaria.php">Primaria</a></li>
                <li><a href="secundaria.php">Secundaria</a></li>
            </ul>
        </nav>
        <div class="btn-close-responsive">
            <i class="fa-solid fa-xmark"></i>
        </div>
        </div>
        <div id="overlay"></div> 
    </header>
    <section>
        <div class="container-ofertas">
           <div class="slider-box">
                <ul>
                    <li>
                        <a href="a"><img id="oferta1" src="imagenes/Ofertas/Oferta1.jpg" alt="Oferta 1"></a>
                    </li>
                    <li>
                        <a href="b"><img id="oferta2" src="imagenes/Ofertas/Oferta2.jpg" alt="Oferta 1"></a>
                    </li>
                    <li>
                        <a href="c"><img id="oferta3" src="imagenes/Ofertas/Oferta3.jpg" alt="Oferta 1"></a>
                    </li>
                    <li>
                        <a href="d"><img id="oferta4" src="imagenes/Ofertas/Oferta4.jpg" alt="Oferta 1"></a>
                    </li>
                    <li>
                        <a href="e"><img id="oferta5" src="imagenes/Ofertas/Oferta5.jpg" alt="Oferta 1"></a>
                    </li>
                </ul>
            </div>

            <h2 class="titulo-ofertas">¡Ofertas y Descuentos!</h2>
    </section>

    <main class="container">
        <div class="grid-images">
            <div class="imagen-producto image-1">
                <img src="imagenes/lapiz 01.jpg" alt="Imagen-Producto 1">
            </div>
            <div class="imagen-producto image-2">
                <img src="imagenes/bolso 07.jpg" alt="Imagen-Producto 2">
            </div>
            <div class="imagen-producto image-3">
                <img src="imagenes/lapicero 02.jpg" alt="Imagen-Producto 3">
            </div>
            <div class="imagen-producto image-4">
                <img src="imagenes/bolso 09.jpg" alt="Imagen-Producto 4">
            </div>
            <div class="imagen-producto image-5">
                <img src="imagenes/negro03.jpg" alt="Imagen-Producto 5">
            </div>
        </div>



      
                        <div class="features-product">
                            <div class="feature-product shipping">
                                <i class="fa-solid fa-truck-fast"></i>
                                <h4>Envio Gratis</h4>
                                <p>En pedidos superiores a $20.00</p>
                            </div>
                            <div class="feature-product return">
                                <i class="fa-solid fa-phone-volume"></i>
                                <h4>Muy facil de Contactarnos</h4>
                                <p>Sólo número de teléfono.</p>
                            </div>
                            <div class="feature-product delivery">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>Entrega rapida</h4>
                                <p>Solo los Municipio Edo Lara</p>
                            </div>
                            <div class="feature-product refund">
                                <i class="fa-solid fa-money-bill-transfer"></i>
                                <h4>Politica de reembolso</h4>
                                <p>60 días de devolución por cualquier motivo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <section class="container container-productos-relacionados">
    <h2>Lo mas vendido</h2>

    <div class="cards-productos-relacionados">
    <?php foreach ($productos_activos as $producto) { ?>
    <div class="card-producto-relacionado">
    <?php 
    $id= $producto['Id_producto'];
    $imagen="../images/productos/$id/negro01.jpg";
    if(!file_exists($imagen)){
        $imagen="../images/nofotos/no_fotos.jpg";
    }
     ?>
        <div class="image-product">
            <img src="<?php echo $imagen ?>" >

            <div class="button-group">
                <button class="btn-add-to-bag">
                    <i class="fa-solid fa-bag-shopping"></i>
                    Añadir a la cesta
                </button>
                <button id="boton" onclick="redireccionar(<?php echo $id?> )"  class="btn-quick-view">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Vista Previa
                        </button>
            </div> 
        </div>
       
        <div class="info-product">
            <div class="container-title">
                <h4 class="product-title"><?= $producto['Nombre']?></h4>
                <p><?= $producto['Descripcion_corta']?></p>
            </div>
            <div class="container-price">
                <span class="price">$<?= $producto['Precio']?></span>
                
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/lapicero 01.jpg" alt="Producto Relacionado 2" class="product-img">

            <div class="button-group">
                <button class="btn-add-to-bag">
                    <i class="fa-solid fa-bag-shopping add-cart"></i>
                    Añadir a la cesta
                </button>
                <button class="btn-quick-view">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Vista Previa
                </button>
            </div> 
        </div>
        
        <div class="info-product">
            <div class="container-title">
                <h4 class="product-title">lapiceros</h4>
                <p>Color Azul, Rojo y Negro</p>
            </div>
            <div class="container-price">
                <span class="price">$3,00</span>
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/bolso 05.jpg" alt="Producto Relacionado 3" class="product-img">

            <div class="button-group">
                <button class="btn-add-to-bag">
                    <i class="fa-solid fa-bag-shopping"></i>
                    Añadir a la cesta
                </button>
                <button class="btn-quick-view">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Vista Previa
                </button>
            </div> 
        </div>
        
        <div class="info-product">
            <div class="container-title">
                <h4 class="product-title">Mochila escolar</h4>
                <p>Color Negro</p>
            </div>
            <div class="container-price">
                <span class="price">$15,00</span>
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/libreta04.jpg" alt="Producto Relacionado 3" class="product-img">

            <div class="button-group">
                <button class="btn-add-to-bag">
                    <i class="fa-solid fa-bag-shopping"></i>
                    Añadir a la cesta
                </button>
                <button class="btn-quick-view">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Vista Previa
                </button>
            </div> 
        </div>
        
        <div class="info-product">
            <div class="container-title">
                <h4 class="product-title" >libretas para la clase</h4>
                <p>Color variados</p>
            </div>
            <div class="container-price">
                <span class="price">$2,00</span>
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

    </section>
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

      <script src="index.js"></script>
   
    </body>

    </html>

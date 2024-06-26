<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>
    alert("Por Favor, Iniciar Sesión");
    window.location = "../Login.php"
     </script>
     ';
     session_destroy();
     die();
}
session_destroy();
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
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=true">Cerrar Sesión</a>

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
                <img src="imagenes/negro01.jpg" alt="Imagen-Producto 5">
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

    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/negro03.jpg" alt="Producto Relacionado 1">

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
                <h4>libreta para la clase</h4>
                <p>Color Morado</p>
            </div>
            <div class="container-price">
                <span>$2,00</span>
                
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/lapicero 01.jpg" alt="Producto Relacionado 2">

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
                <h4>libreta para la clase</h4>
                <p>Color Morado</p>
            </div>
            <div class="container-price">
                <span>$3,00</span>
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/bolso 05.jpg" alt="Producto Relacionado 3">

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
                <h4>libreta para la clase</h4>
                <p>Color Morado</p>
            </div>
            <div class="container-price">
                <span>$15,00</span>
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

    <div class="card-producto-relacionado">
        <div class="image-product">
            <img src="imagenes/libreta04.jpg" alt="Producto Relacionado 3">

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
                <h4>libreta para la clase</h4>
                <p>Color Morado</p>
            </div>
            <div class="container-price">
                <span>$15,00</span>
                <p>
                    <i class="fa-solid fa-heart"></i>
                    Guardar
                </p>
            </div>
        </div>
    </div>

   

    </div>
    </section>
    <footer>
         
        <div class="container footer">
           
                <h1 class="logo-footer"><img src="/imagenes/logo-removebg-preview.png" alt="logo"></h1>

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

    </html>

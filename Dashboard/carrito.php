<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="dasboard.css">
    <title>Carrito</title>
</head>
<body>
    <div class="wrapper">
        <aside class="aside">
         <header>
           <h1 class="logo">TinaCreativa</h1>
         </header>
         <nav>
           <ul class="menu">
               <li>
                   <a class="boton-menu boton-volver" href="./dasboard.html">
                    <i class="bi bi-arrow-return-left"></i>Seguir comprando
                   </a>
               </li>
               <li>
                <a class="boton-menu boton-carrito active" href="./carrito.html">
                    <i class="bi bi-cart-fill"></i>Carrito 
                </a>
                </li>
           </ul>
         </nav>
         <footer>
            <p class="texto-footer">2024 TinaCreativa</p>
         </footer>
        </aside>
        <main class="main">
           <h2 class="titulo-principal">Carrito</h2>
           <div class="contenedor-carrito">
               <p class="carrito-vacio">Tu carrito esta vacio. <i class="bi bi-emoji-frown"></i> </p>
              
               <div class="carrito-productos disabled">

               <div class="carrito-producto">
                    <img class="carrito-producto-imagen" src="./Libreta 01.jpg" alt="">
                    <div class="carrito-producto-titulo">
                        <small>titulo</small>
                        <h3>Libreta 01</h3>
                    </div>
                    <div class="carrito-producto-cantidad">
                        <small>Cantidad</small>
                        <p>1</p>
                    </div>
                    <div class="carrito-producto-precio">
                    <small>precio</small>
                    <p>$1.50</p>
                    </div>
                    <div class="carrito-producto-subtotal">
                        <small>subtotal</small>
                        <p>$1.50</p>
                    </div>
                    <button class="carrito-producto-eliminar"><i class="bi bi-trash3-fill"></i></button>
               </div>


               <div class="carrito-producto">

                <img class="carrito-producto-imagen" src="./libreta02.jpg" alt="">
                <div class="carrito-producto-titulo">
                    <small>titulo</small>
                    <h3>Libreta 02</h3>
                </div>
                <div class="carrito-producto-cantidad">
                    <small>Cantidad</small>
                    <p>2</p>
                </div>
                <div class="carrito-producto-precio">
                <small>precio</small>
                <p>$2,00</p>
                </div>
                <div class="carrito-producto-subtotal">
                    <small>subtotal</small>
                    <p>$5,50</p>
                </div>
                <button class="carrito-producto-eliminar"><i class="bi bi-trash3-fill"></i></button>
           </div>

               </div>
               <div class="carrito-acciones disabled">
                <div class="carrito-acciones-izquierda">
                    <button class="carrito-acciones-vaciar">vaciar carrito</button>

                </div>
                <div class="carrito-acciones-derecha">
                    <div class="carrito-acciones-total">
                        <p>total</p>
                        <p id="total">$5,50</p>
                    </div>
                    <button class="carrito-acciones-comprar"> comprar ahora</button>
                </div>

               </div>
               <p class="carrito-comprado disabled">Muchas gracias por tu compra.<i class="bi bi-emoji-grin"></i></p>
           </div>
        </main>
        </div>
</body>
</html>
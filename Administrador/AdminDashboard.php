<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/56aef74e76.js" crossorigin="anonymous"></script>
</head>

<header class="container-header">
    <div class="container-logo">
        <h1 class="logo"><img src="Imagenes/logo-removebg-preview.png" alt="logo"></h1>
    </div>

    <div class="container-titulo">
    <a href="AdminDashboard.php"><h1 class="titulo">ADMINISTRADOR</h1></a>
    </div>

    <div class="container-usuario">
        <label for="usuario-icono">
            <i class="fa-solid fa-user" id="usuario-icono" name="usuario-icono"></i></label>
                <div class="opciones-usuario" id="opciones-usuario">
                    <ul>
                        <div class="li-box">
                            <li><a href="#">Cambiar Contraseña</a></li>
                        </div>
                        <div class="li-box">
                            <li><a href="../Login/Login.html">Cerrar Sesión</a></li>
                        </div>
                    </ul>
                    
                    <script>
                        const usuarioIcono = document.querySelector('label[for="usuario-icono"]');
                        const opcionesUsuario = document.getElementById('opciones-usuario');
                      
                        usuarioIcono.addEventListener('click', (e) => {
                          e.stopPropagation(); // Evitamos que el evento se propague al documento
                          opcionesUsuario.classList.toggle('mostrar'); /* Agregamos o quitamos la clase mostrar */
                        });
                      
                        document.addEventListener('click', (e) => {
                          if (!e.target.closest('.opciones-usuario') &&!e.target.closest('label[for="usuario-icono"]')) { 
                            opcionesUsuario.classList.remove('mostrar'); /* Ocultamos las opciones */
                          }
                        });
                      </script>
                </div>
    </div>
</header>

<body>
    <div class="Admin">

        <div class="container-modulos">    
            <div class="modulos-box">
                <img src="/Administrador/Imagenes/productos.png" alt="Modulo productos">
                <a class="btn" href="AdminDashboard.php">CLIENTES</a>
            </div>

            <div class="modulos-box">
                <img src="/Administrador/Imagenes/productos.png" alt="Modulo productos">
                <a class="btn" href="productos.php">PRODUCTOS</a>
            </div>

            <div class="modulos-box">
                <img src="/Administrador/Imagenes/productos.png" alt="Modulo productos">
                <a class="btn" href="AdminDashboard.php">VENTAS</a>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
            <div class="modulos-box-productos">

                <form action="php/productos.php" method="POST" enctype="multipart/form-data">
                    <div class="select-imagen">
                        <div class="drop-zone">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            <p>Subir una imagen o arrastrar y soltar<br>PNG, JPG, WEBP hasta 5MB</p>
                            <input type="file" id="fileInput" name="imagen" style="display: none;">
                        </div>
                    </div>
                        <script src="script.js"></script>
                            <div class="container-input">

                                <div class="input">
                                    <label for="nombre-producto"><h2>Nombre del Producto</h2>
                                    <input id="nombre-producto" name="nombre-producto" type="text" placeholder="Ingrese el nombre del producto" required></label>
                                </div>

                                <div class="input">
                                    <label for="codigo-producto"><h2>Código del Producto</h2>
                                    <input id="codigo-producto" name="codigo-producto" type="text" placeholder="Ingrese el codigo del producto" required></label>
                                </div>

                                <div class="input">
                                    <label for="descripcion-corta"><h2>Descripcion Corta</h2>
                                    <textarea name="descripcion-corta" id="descripcion-corta" cols="30" rows="10" style="resize: vertical;" placeholder="Ingresa lo mas destacado del producto"></textarea></label>
                                </div>

                                <div class="input">
                                    <label for="descripcion-larga"><h2>Descripcion Larga</h2>
                                    <textarea name="descripcion-larga" id="descripcion-larga" cols="30" rows="10" style="resize: vertical;" placeholder="Ingresa todos los detalles del producto"></textarea></label>
                                </div>

                                <div class="input">
                                    <label for="precio-producto"><h2>Precio del Producto</h2>
                                    <input id="precio-producto" name="precio-producto" type="number" placeholder="Ingresa el precio del producto" required></label>
                                </div>

                                <div class="input">
                                    <label for="status-producto"><h2>Status</h2></label>
                                    <select name="status-producto" id="status-producto">
                                        <option value="disponible">Disponible</option>
                                        <option value="agotado">Agotado</option>
                                    </select>
                                    </div>
                                
                                <input type="submit" value="AGREGAR PRODUCTO" class="btn-p" name="agregar_producto">
                            </div>
                </form>
               
            </div>
        </div>
    </div>

    <section>
        <div class="lista-productos">
            <h1 class="titulo-lista-productos">LISTA DE PRODUCTOS</h1>

            <div class="contenedor-tabla">
            <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Descripción Corta</th>
                <th>Descripción Larga</th>
                <th>Precio</th>
                <th>Status</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'php/lista_productos.php';
                foreach ($productos as $producto) {
           ?>
            <tr>
                <td><?php echo $producto['Id_producto'];?></td>
                <td><img src="<?php echo $producto['Imagen'];?>" alt="<?php echo $producto['Nombre'];?>" height="50"></td>
                <td><?php echo $producto['Nombre'];?></td>
                <td><?php echo $producto['Codigo'];?></td>
                <td><?php echo $producto['Descripcion_corta'];?></td>
                <td><?php echo $producto['Descripcion_larga'];?></td>
                <td>$<?php echo $producto['Precio'];?></td>
                <td><?php echo $producto['Status_producto'];?></td>
               <td>

               <label for="btn-editar">
                <a class="btn" href="productos.php"><i class="fa-solid fa-pen-to-square"></i> Editar</label></a>

                <a href="php/eliminar_producto.php?id=<?php echo $producto['Id_producto'];?>" class="btn" onclick="return confirm('¿Estás seguro de eliminar este producto?');"><i class="fa-solid fa-trash"></i> Eliminar</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>

    </section>
</body>
</html>

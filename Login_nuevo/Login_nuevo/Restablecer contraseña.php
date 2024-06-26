
  <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="style.css">
       <title>Restablecer contraseña</title>
   </head>
   <body>

   <div class="form-information-dos">
        
            <div class="form-information-childs-dos">
                <h2>Restablece tu contraseña</h2>
                <p>Por favor introduce tu nueva contraseña para obtener acceso</p>
                  <form class="form" action="../php/actualizar_contraseña.php" method="POST" id="formulario">     
                    <label>
                        <i class='bx bx-lock-open-alt'></i>
                        <input type="password"placeholder=" Crear  Nueva Contraseña" id="clave" required name="nueva_contraseña">
                    </label>
                    <label>
                        <i class='bx bx-lock-open-alt'></i>
                        <input type="password"placeholder=" Confirmar Nueva Contraseña" id="confirmar-clave" required name="confirmar_contraseña">
                    </label>

                    <script>
                        const formulario = document.getElementById('formulario');
                        const clave = document.getElementById('clave');
                        const confirmarClave = document.getElementById('confirmar-clave');
          
                        formulario.addEventListener('submit', (event) => {
                          if (clave.value !== confirmarClave.value) {
                            event.preventDefault();
                            alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
                          }
                        });
                      </script>

                    <input type="submit" value="Aceptar" >
                </form>

            </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

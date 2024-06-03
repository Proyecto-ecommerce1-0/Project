   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="style.css">
       <title>¿Olvidaste tu contraseña?</title>
   </head>
   <body>

   <div class="form-information-dos">
        
            <div class="form-information-childs-dos">
                <h2>¿Olvidaste tu Contraseña?</h2>
                <p>Por favor introduce tu correo electronico y te enviaremos toda la informacion necesaria
                    para que puedas restablecer tu contraseña y obtener acceso.
                </p>
                  <form class="form" action="../php/enviar_token.php" method="POST">     
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="email-input" placeholder="Correo Electronico" required name="correo">
                    </label>     
                     
                    <input type="submit" value="Aceptar" >
                </form> 
                <div class="input-link-dos">
                    <p> No tienes una cuenta? <a href="Login.php" >Crear una cuenta</a></p>
                </div>
                </form>
            </div>
    </div>
    <script src="script.js">
        const emailInput = document.getElementById('email-input');
         const emailValue = emailInput.value;
        console.log('Email value:', emailValue);
    </script>
</body>
</html>

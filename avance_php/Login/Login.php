<?php

session_start();
if(isset($_SESSION['usuario'])){
    header("location:../Dashboard%20dos/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="container-form register  ">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenidos</h2>
                <p>Para unirte a nuestra pagina web debes Iniciar sesion con tus datos</p>
                <input type="button" value="Iniciar Sesion"  id="sign-in">
                
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
               <div class="icons">
                <i class='bx bxl-google-plus-circle'></i>
               </div>
                <p>O usa tu email para registrarte</p>

                
                <form action="../php/registro_usuarioBD.php" method="POST" class="form">
                    <!--Grupo: Nombre-->
                    <div class="formulario-grupo" id="grupo-nombre">
                        <label for="email" class="formulario-label">
                            <i class='bx bx-user-voice'></i></i>
                            <input type="text" placeholder="Ingresa tu Nombre " required name ="nombre">
                            <i class='formulario-validacion-estado bx bx-x-circle' style='color:#ff1207'  ></i> 
                        </label>
                        <p class="formulario-grupo-input-error"> El Nombre tiene que ser de 4 a 12 digitos.</p>
                    </div> 

                    <!--Grupo: Segundo Nombre-->  
                    <div class="formulario-grupo" id="grupo-snombre"> 
                        <label for="text" class="formulario-label">
                            <i class='bx bx-user-voice'></i>    
                            <input type="text" placeholder="Ingresa tu Segundo Nombre" required name="segundo_nombre">
                            
                        </label>
                    </div>

                    <!--Grupo: Apellido-->  
                    <div class="formulario-grupo" id="grupo-apellido"> 
                        <label for="text" class="formulario-label">
                            <i class='bx bx-user-voice'></i>    
                            <input type="text" placeholder="Ingresa tu Apellido " required name="apellido">
                            
                        </label>
                    </div>

                    <!--Grupo:  Segundo Apellido-->  
                    <div class="formulario-grupo" id="grupo-sapellido"> 
                        <label for="text" class="formulario-label">
                            <i class='bx bx-user-voice'></i>    
                            <input type="text" placeholder="Ingresa tu Segundo Apellido" required  name="segundo_apellido">
                            
                        </label>
                    </div>

                    <!--Grupo: Cedula-->
                    <div class="formulario-grupo" id="grupo-nombre">
                        <label for="email" class="formulario-label">
                            <i class='bx bx-id-card'></i> 
                        <input type="text" placeholder="Cedula" required name="cedula">
                        </label>
                    </div>

                    <!--Grupo: Correo Electronico-->
                    <div class="formulario-grupo " id="grupo-nombre">
                    <label for="email" class="formulario-label">
                        <i class='bx bx-envelope'></i>
                        <input type="email"placeholder="Correo Electronico" required name="correo">
                        <i class='formulario-validacion-estado bx bx-x-circle' style='color:#ff1207'  ></i>
                    </label>
                    <p class="formulario-grupo-input-error">La contraseña tiene que ser de 4 a 12 digitos.</p>
                    </div>
                    
                    <!--Grupo: Telefono-->
                    <div class="formulario-grupo" id="grupo-nombre" >
                    <label for="email" class="formulario-label">
                        <i class='bx bx-phone-call' style='color:#0a0a0a'  ></i>
                    <input type="number" placeholder="Telefono" required name= "telefono">
                    </div>

                    <!--Grupo: Contraseña-->
                    <div class="formulario-grupo" id="grupo-password">
                    <label for="password" class="formulario-label">
                        <i class='bx bx-lock-open-alt'></i>
                        <input type="password" class="formulario-input" name="password" id="password" placeholder="Contraseña" required>
                        <i class='formulario-validacion-estado bx bx-x-circle' style='color:#ff1207'  ></i> 
                    </label>
                    <p class="formulario-grupo-input-error">La contraseña tiene que ser de 4 a 12 digitos.</p>
                    </div>

                    <div class="contenedor-seleccion">
                        <div class="selectores">
                          <label for="genero">Genero</label>
                          <div class="select">
                            <select name="genero" id="genero" required>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                            </select>
                          </div>
                        </div>
                        <script>
                        const generoSelect = document.getElementById('genero');
                        const guardarSeleccion = () => {
                        const generoSeleccionado = generoSelect.value;

                         // Enviar la selección al servidor usando AJAX
                          const xhr = new XMLHttpRequest();
                          xhr.open('POST', '../php/registro_usuarioBD.php'); 
                          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                          xhr.onload = () => {
                                if (xhr.status === 200) {
                                  const respuesta = JSON.parse(xhr.responseText);
                                 if (respuesta.exito) {
                                 alert('Selección de género guardada correctamente.');
                                 } else {
                                 alert('Error al guardar la selección: ' + respuesta.error);
                                 }
                                } else {
                                alert('Error de red al enviar la solicitud.');
                                }
                                };
                                xhr.send('genero=' + generoSeleccionado);
                                };

                              generoSelect.addEventListener('change', guardarSeleccion);
                                 </script>
                        <div class="selectores">
                            <label for="estado">Estado</label>
                            <div class="select">
                              <select name="estado" id="estado" required>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Anzoátegui">Anzoátegui</option>
                                <option value="Apure">Apure</option>
                                <option value="Aragua">Aragua</option>
                                <option value="Barinas">Barinas</option>
                                <option value="Bolívar">Bolívar</option>
                                <option value="Carabobo">Carabobo</option>
                                <option value="Cojedes">Cojedes</option>
                                <option value="Delta Amacuro">Delta Amacuro</option>
                                <option value="Falcón">Falcón</option>
                                <option value="Guárico">Guárico</option>
                                <option value="Lara">Lara</option>
                                <option value="Mérida">Mérida</option>
                                <option value="Miranda">Miranda</option>
                                <option value="Monagas">Monagas</option>
                                <option value="Nueva Esparta">Nueva Esparta</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="Sucre">Sucre</option>
                                <option value="Táchira">Táchira</option>
                                <option value="Trujillo">Trujillo</option>
                                <option value="La Guaira">La Guaira</option>
                                <option value="Yaracuy">Yaracuy</option>
                                <option value="Zulia">Zulia</option>
                                <option value="Distrito Capital">Distrito Capital</option>
                                <option value="Dependencias Federales">Dependencias Federales</option>
                              </select>
                            </div>
                          </div>
            
                          <div class="selectores">
                            <label for="municipio">Municipio</label>
                            <div class="select">
                              <select name="municipio" id="municipio" required>
                                <option value="Alto Orinoco">Alto Orinoco</option>
                                <option value="Atabapo">Atabapo</option>
                                <option value="Atures">Atures</option>
                                <option value="Autana">Autana</option>
                                <option value="Manapiare">Manapiare</option>
                                <option value="Maroa">Maroa</option>
                                <option value="Río Negro">Río Negro</option>
                                <option value="Anaco">Anaco</option>
                                <option value="Aragua">Aragua</option>
                                <option value="Manuel Ezequiel Bruzual">Manuel Ezequiel Bruzual</option>
                                <option value="Diego Bautista Urbaneja">Diego Bautista Urbaneja</option>
                                <option value="Fernando Peñalver">Fernando Peñalver</option>
                                <option value="Francisco Del Carmen Carvajal">Francisco Del Carmen Carvajal</option>
                                <option value="General Sir Arthur McGregor">General Sir Arthur McGregor</option>
                                <option value="Guanta">Guanta</option>
                                <option value="Independencia">Independencia</option>
                                <option value="José Gregorio Monagas">José Gregorio Monagas</option>
                                <option value="Juan Antonio Sotillo">Juan Antonio Sotillo</option>
                                <option value="Juan Manuel Cajigal">Juan Manuel Cajigal</option>
                                <option value="Libertad">Libertad</option>
                                <option value="Francisco de Miranda">Francisco de Miranda</option>
                                <option value="Pedro María Freites">Pedro María Freites</option>
                                <option value="Píritu">Píritu</option>
                                <option value="San José de Guanipa">San José de Guanipa</option>
                                <option value="San Juan de Capistrano">San Juan de Capistrano</option>
                              </select>
                            </div>
                          </div>
            
                          <div class="selectores">
                            <label for="parroquia">Parroquia</label>
                            <div class="select">
                              <select name="parroquia" id="parroquia" required>
                                <option value="Alto Orinoco">Alto Orinoco</option>
                                <option value="Huachamacare Acanaña">Huachamacare Acanaña</option>
                                <option value="Marawaka Toky Shamanaña">Marawaka Toky Shamanaña</option>
                                <option value="Mavaka Mavaka">Mavaka Mavaka</option>
                                <option value="Sierra Parima Parimabé">Sierra Parima Parimabé</option>
                                <option value="Ucata Laja Lisa">Ucata Laja Lisa</option>
                                <option value="Yapacana Macuruco">Yapacana Macuruco</option>
                                <option value="Caname Guarinuma">Caname Guarinuma</option>
                                <option value="Fernando Girón Tovar">Fernando Girón Tovar</option>
                                <option value="Luis Alberto Gómez">Luis Alberto Gómez</option>
                                <option value="Pahueña Limón de Parhueña">Pahueña Limón de Parhueña</option>
                                <option value="Platanillal Platanillal">Platanillal Platanillal</option>
                                <option value="Samariapo">Samariapo</option>
                                <option value="Sipapo">Sipapo</option>
                                <option value="Munduapo">Munduapo</option>
                                <option value="Guayapo">Guayapo</option>
                                <option value="Alto Ventuari">Alto Ventuari</option>
                                <option value="Medio Ventuari">Medio Ventuari</option>
                                <option value="Bajo Ventuari">Bajo Ventuari</option>
                                <option value="Victorino">Victorino</option>
                                <option value="Comunidad">Comunidad</option>
                                <option value="Casiquiare">Casiquiare</option>
                                <option value="Cocuy">Cocuy</option>
                                <option value="San Carlos de Río Negro">San Carlos de Río Negro</option>
                                <option value="Solano">Solano</option>
                              </select>
                            </div>
                          </div>
                        </div>

                    <div class="formulario-grupo-terminos" id="grupo-terminos">
                        
                            <input class="formulario-checkbox" type="checkbox" name="terminos" id="terminos">
                            Acepto los Terminos y Condiciones
                       
                    </div>
                    
                    <div class="formulario-mensaje" id="formulario-mensaje">
                        <p><i class='bx bx-alarm-exclamation' style='color:#050505'  ></i> <b>Error</b>Por favor rellena el registro correctamente</p>
                    </div>

                     <div class="formulario-grupo formulario-grupo-btn-enviar">
                    <input type="submit" value="Registrarse">
                    </div>

                    <p class="formulario-mensaje-exito" id="formulario-mensaje-exito">Te haz registrado exitosamente</p>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenidos Nuevamente!!</h2>
                <p>Para unirte a nuestra pagina web debes registrarte con tus datos</p>
                <input type="button" value="Registrarse"  id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesion</h2>
               <div class="icons">
                <i class='bx bxl-google-plus-circle'></i>
               </div>
                <p>O Iniciar Session con una cuenta</p>
                <form class="form" action= "../php/inicio_sesion.php" method="POST">
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email"placeholder="Correo Electronico" name="correo">
                    </label>
                    <label>
                        <i class='bx bx-lock-open-alt'></i>
                        <input type="password"placeholder="Contraseña" name= "contrasena">
                    </label>

                        <div class="input-link">
                            <a href="olvidar contraseña.php" class="grandient-text">¿Olvidaste tu Contraseña?</a>
                      </div>         
                     
                    <input type="submit" value="Iniciar">
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

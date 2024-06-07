const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      formRegister = document.querySelector(".register"),
      formlogin = document.querySelector(".login");
    
btnSignIn.addEventListener("click", e =>{
         formRegister.classList.add("hide");
         formlogin.classList.remove("hide");
})

btnSignIn.addEventListener("click", e =>{
    formLogin.classList.add("hide");
    formRegister.classList.remove("hide");
})

/*Validar datos*/

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');



const expresiones =  {

  nombre: /^[a-zA-Z0-9\_\-]{1,40}$/,
  password: /^.{4,12}$/,
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    
}

const validarformulario = () =>{
      switch (e.target.name){
        case "nombre":
             if(expresiones.nombre.test(e.target.value)){
              document.getElementById('grupo-nombre').classList.classList.remove('formulario-grupo-incorrecto');
              document.getElementById('grupo-nombre').classList.classList.add('formulario-grupo-incorrecto');
             } else {
              document.getElementById('grupo-nombre').classList.add('formulario-grupo-incorrecto');
             }

        break;
        case "correo":
        

        break;
        case "password":
        

        break;
      }

}

inputs.forEach((input) => {
     inputs.addEventListener('keyup', validarformulario);
     inputs.addEventListener('blur', validarformulario); 
});

formulario.addEventListener('submit', () => {
   e.preventDefault();
})
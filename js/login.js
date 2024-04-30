const formulario_Login = document.getElementById("loginForm");
const formulario_register = document.getElementById("registerForm");
const form = document.querySelector('#contenedor_formularios');
const registerBtn = document.getElementById("registrarBoton");
const iniciarBtn = document.getElementById("iniciarBoton");
const texto = document.querySelectorAll('.user');

/* Botones del formurio*/

const boton_registrado = document.getElementById("registroBtn");
const boton_iniciarSesion = document.getElementById("iniciarSesion");
 /* Datos Obtenidos*/
const inputsRegisters = document.querySelectorAll('.registerInpt');
let userName;
let email;
let password;

texto[0].style.opacity="0";

function register(){
    form.style.left="40%";
    formulario_Login.style.opacity="0";
    formulario_register.style.opacity="1"
    formulario_Login.style.display="none";
    formulario_register.style.display="block"
    texto[0].style.opacity="1";
    texto[1].style.opacity="0";
}
function Iniciar(){
    form.style.left="-3%";
    formulario_register.style.opacity="0"
    formulario_Login.style.opacity="1";
    formulario_Login.style.display="block";
    formulario_register.style.display="none"
    texto[0].style.opacity="0";
    texto[1].style.opacity="1";
}

function registrado(){
    form.style.left="-3%";
    formulario_register.style.opacity="0"
    formulario_Login.style.opacity="1";
    formulario_Login.style.display="block";
    formulario_register.style.display="none"
    texto[0].style.opacity="0";
    texto[1].style.opacity="1";
    registerBtn.style.display="none";
    userName=inputsRegisters[0].value;
    email=inputsRegisters[1].value;
    password=inputsRegisters[2].value;
    document.getElementById("h3Register").innerHTML="¡ Listo " + "<strong>" + userName + "</strong>" + " Tu usuario ha sido creado";
    document.getElementById("pRegister").innerHTML="Ingresa tu usuario";

}

const usuario = document.getElementById("usuario");
const clave = document.getElementById("clave");




registerBtn.addEventListener('click',register);
iniciarBtn.addEventListener('click',Iniciar);


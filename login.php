
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="./css/login.css">
    <style>
        body{
            background-image: url(./img/background_img.jpg);
        }
    </style>
    <title>login-wipii</title>
</head>
<body>
    <main>
        <div id="contenedorAll">
            <div class="backBox">
                <div id="textLogin" class="user">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para ingresar a tu cuenta</p>
                    <button class="bbutton" id="iniciarBoton">Iniciar Sesión</button>
                </div>
                <div id="textRegister" class="user">
                    <h3 id="h3Register">¿Aún no tienes una cuenta?</h3>
                    <p id="pRegister">Registrate para que puedas iniciar sesión</p>
                    <button class="bbutton" id="registrarBoton">Registrarse</button>
                </div>
                    <div id="contenedor_formularios">
                        <form class="formulariosW" id="loginForm" action="#" method="post">
                            <h2>Iniciar Sesión</h2>
                            <?php
                                include './modelo/conexion.php';
                                include "./controlador/controlador_login.php";
                            ?>
                            <input id="usuario" type="text" name="userInto" placeholder="Usuario" autocomplete="nickname" >
                            <input id="clave" type="password" name="clave" id="contraseña" placeholder="contraseña" autocomplete="current-password" >
                            <input type="submit" id="iniciarSesion" name="iniciarSesion" value="Iniciar Sesion" class="formBtn">
                        </form>
                        <form class="formulariosW" id="registerForm" action="#" method="post">
                            <h2>Registrarse</h2>
                            <input type="text" id="usuario" name="user" class="registerInpt" placeholder="Usuario" autocomplete="nickname">
                            <input id="nameUser" class="registerInpt" type="text" name="name" placeholder="Nombre" autocomplete="name">
                            <input type="text" class="registerInpt" id="apellidos" name="lastName" placeholder="Apellidos" >
                            <input id="correo" class="registerInpt" type="email" name="email" placeholder="Correo Electronico" autocomplete="email" >
                            <input class="registerInpt" type="password" name="password" placeholder="Contraseña" autocomplete="new-password" >
                            <h3>Tipo de Cuenta</h3>
                            <input type="radio" name="tipo_user" id="cliente"><label for="cliente">Cliente</label>
                            <input type="radio" name="tipo_user" id="proveedor"><label for="proveedor">Proveedor</label>
                            <input type="tel" name="cel" id="celular" minlength="10" placeholder="Numero de Celular" autocomplete="tel-local" >
                            
                            <button type="submit" id="registroBtn" name="registroBtn" class="formBtn">Registrarse</button>
                        </form>
                    </div>
            </div>
        </div>
    </main>
    <script src="./js/login.js"></script>
</body>
</html>

<?php 

$enlace=mysqli_connect("bpd1rhxzil86jzvoxlbu-mysql.services.clever-cloud.com", "uhwver45bn3o1mac", "2SFUl7IjeZbybfGDKa7w", "bpd1rhxzil86jzvoxlbu");

if (!$enlace) {
    die("Error al conectar: " . mysqli_connect_error());
}

if(isset($_POST["registroBtn"])){
    $usuario = $_POST ["user"];
    $nombre = $_POST["name"];
    $apellidos = $_POST["lastName"];
    $email = $_POST["email"];
    $contraseña = $_POST["password"];
    $tipo = $_POST["tipo_user"];
    $cel = $_POST["cel"];

    $insertarDatos = "INSERT INTO usuario VALUES(NULL,'$usuario','$nombre','$apellidos','$email','$contraseña','$tipo','$cel')";

    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
}




?>
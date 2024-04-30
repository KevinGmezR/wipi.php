<?php

$servidor="bpd1rhxzil86jzvoxlbu-mysql.services.clever-cloud.com";
$puerto = "3306";
$usuario="uhwver45bn3o1mac";
$clave="2SFUl7IjeZbybfGDKa7w";
$baseDeDatos="bpd1rhxzil86jzvoxlbu";

$enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos, $puerto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios</title>
</head>
<body>
    <header></header>
    <main>
    <form class="formulariosW" id="registerForm" action="#" method="post">
                            <h2>Registrarse</h2>
                            <input type="text" id="usuario" name="user" class="registerInpt" placeholder="Usuario">
                            <input id="nameUser" class="registerInpt" type="text" name="name" placeholder="Nombre">
                            <input type="text" class="registerInpt" id="apellidos" name="lastName" placeholder="Apellidos">
                            <input id="correo" class="registerInpt" type="email" name="email" placeholder="Correo Electronico">
                            <input class="registerInpt" type="password" name="password" placeholder="Contraseña">
                            <h3>Tipo de Cuenta</h3>
                            <input type="radio" name="tipo_user" id="cliente"><label for="tipo_user">Cliente</label>
                            <input type="radio" name="tipo_user" id="proveedor"><label for="tipo_user">Proveedor</label>
                            <input type="tel" name="cel" id="celular" minlength="10" placeholder="Numero de Celular">
                            
                            <button type="submit" id="registroBtn" name="registroBtn" class="formBtn">Registrarse</button>
                        </form>
    </main>
    <footer></footer>
</body>
</html>

<?php 

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
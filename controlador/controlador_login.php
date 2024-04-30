<?php

session_start();

if(isset($_POST["iniciarSesion"])) {


     if (!empty($_POST["userInto"]) and !empty($_POST["clave"])) {

         $user = $_POST["userInto"];
         $password = $_POST["clave"];

         $sql = $conesion->query(" select * from usuario where usuario='$user' and contraseña='$password'");
         if ($datos=$sql->fetch_object()) {
             $_SESSION["id"]=$datos->id;
             $_SESSION["nombre"]=$datos->nombre;
             $_SESSION["apellidos"]=$datos->apellidos;
             $_SESSION["correo"]=$datos->email;
             $_SESSION["password"]=$datos->contraseña;
             $_SESSION["tipo"]=$datos->tipo;
             $_SESSION["cel"]=$datos->cel;
             header("location: inicio.php");
         } else {
             echo "Usuario no Existe";
    }
        
    // } else {
    //     echo"Campos Vacios";
     }

}


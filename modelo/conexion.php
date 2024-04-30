<?php

$servidor="bpd1rhxzil86jzvoxlbu-mysql.services.clever-cloud.com";
$usuario="uhwver45bn3o1mac";
$clave="2SFUl7IjeZbybfGDKa7w";
$baseDeDatos="bpd1rhxzil86jzvoxlbu";

$conesion = new mysqli("bpd1rhxzil86jzvoxlbu-mysql.services.clever-cloud.com","uhwver45bn3o1mac","2SFUl7IjeZbybfGDKa7w","bpd1rhxzil86jzvoxlbu");
$conesion->set_charset("utf8");

if($conesion->connect_error){
    die("Error de conexión: ". $conesion->connect_error);
}
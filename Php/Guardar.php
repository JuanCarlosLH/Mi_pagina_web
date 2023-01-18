<?php
require 'ConexionSQL.php';
$correo= $_POST['correo'];
$ciudad= $_POST['ciudad'];
$calificacion= $_POST['calificacion'];
$correo= $_POST['correo'];
$comentario= $_POST['comentario'];

$insertar = "INSERT INTO usuario VALUES ('$correo','$ciudad','$calificacion','$comentario')";

$query = mysqli_query($con,$insertar);

if ($query) {
   echo "Se guardo correcto";
}else{
    echo "No se guardo correcto";
}


?>
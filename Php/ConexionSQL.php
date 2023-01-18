<?php
$dbname ="pagina";
$usuario = "root";
$password = "";

$con=mysqli_connect("localhost:3306","root","",$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,$dbname);
echo 'conexion exitosa';
?>
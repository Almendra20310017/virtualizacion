<?php

include 'conexion.php';

$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];
$sexo = $_POST["Sexo"];

//Consulta//
$inser ="INSERT INTO usuario (id,Nombre,Correo,Telefono,Sexo) values ('0', '$nombre','$correo','$telefono','$sexo')";

$ir=mysqli_query($con,$inser);
if($ir){
    echo "Se ha registrado con exito";

}else{
    echo "Hay un error";
}

?>
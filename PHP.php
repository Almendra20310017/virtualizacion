<?php
include 'conexion.php';

$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];
$sexo = $_POST["Sexo"];
$contraseña = $_POST["Contraseña"];

//Consulta//
$inser ="INSERT INTO usuario (Nombre,Correo,Telefono,Sexo,Contraseña) values ('$nombre','$correo','$telefono','$sexo','$contraseña')";

$ir=mysqli_query($conn,$inser);
if($ir){
    echo "Se ha registrado con exito";
    header("Location: registro.html");

}else{
    echo "Hay un error";
}

?>
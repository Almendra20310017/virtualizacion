<?php
include 'conexion.php';



$nombre = $_POST["Nombre"];
$id = $_POST["Id_producto"];
$precio = $_POST["Precio"];
$tipo= $_POST["Tipo"];
$Imagen = $_POST["Imagen"];

//Consulta//
$insert= "INSERT INTO productos (Nombre,Id_producto,Precio,Tipo,Imagen) VALUES ('$nombre','$id', '$precio','$tipo','$Imagen')";

$ir=mysqli_query($conn,$insert);
if($ir){
    echo "Se ha registrado con Exito";
}else{
    echo "Hay un error";
}

?>
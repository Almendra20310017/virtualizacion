<?php
include("conexion.php");
if(isset($_GET["borrar"])){
    $pro = $_GET["borrar"];
    $sql="DELETE FROM carrito WHERE id = '$pro'";
    
    $result=mysqli_query($conn,$sql);
    
    if($result) header('Location: carrito.php');
} else {
    $pro = $_GET["id"];
    $sql="INSERT INTO carrito(id_producto) VALUES('$pro')";
    
    $result=mysqli_query($conn,$sql);
    
    if($result) header('Location: carrito.php');
}

?>
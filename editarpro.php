<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDR Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
<html>
<head>
	
	<link rel="stylesheet" href="build/css/editar.css">
	

</head>

<body>
<center>
<form name="Editar Productos" action="mantenimiento.php" method="post">
<table border="1">
<table id="customers">

<tr>
<td colspan="4"><label> Buscar, Editar y Eliminar Productos</label></td>
</tr>

<tr><td colspan="4"><label>Editar Productos </label></td></tr>
<tr>
	<td><label>Id_producto</label></td><td><input type="text" value="" maxlength="30" name="txtid" required></td>
	<td><label>Nombre Producto</label></td><td><input type="text" value="" maxlength="30" name="txtnombre" size="30" required></td>
</tr>
<tr>
	<td><label>Tipo Producto</td><td><input type="text" value="" maxlength="30" name="txttipo" required></td>
	<td><label>Precio</label></td><td><input type="text" value="" maxlength="30" size="30" name="txtprecio"></td>
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Editar" name="editardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
<input type="submit" value="Buscar" name="buscarproducto">

</td>
</tr>
<tr><td colspan="4"><label>Listado de Productos </label></td></tr>
<tr><td><label>Id_producto</label></td>
	<td><label>Nombre Producto</label></td>
	<td><label>Tipo Producto</label></td>
	<td><label>Precio</label></td>
</tr>

<?php 
include("conexion.php");

$sql="SELECT * FROM productos";
if(isset($_GET["cod"])) {
	if($_GET["cod"] != "")  $sql="SELECT * FROM productos WHERE Id_producto = '" . $_GET["cod"] . "'";
}
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> <td><?php echo $mostrar['Id_producto'] ?>
	<td><?php echo $mostrar['Nombre'] ?>
	<td><?php echo $mostrar['Tipo'] ?>
	<td><?php echo $mostrar['Precio'] ?>

</tr>
<?php
}

?>

</table>
</form>
</center>
<header class="header inicio">
    <div class="contenedor contenido-header">
        <div class="barra">
            <a href="index.html">
                <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
            </a>

            <div class="mobile-menu">
                <img src="build/img/barras.svg" alt="icono menu responsive">
            </div>

            <div class="derecha">
                <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                <nav class="navegacion">
                    <a href="nosotros.html">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="registro.html">Registro</a>
                    <a href="productos.html">Productos</a>
                </nav>
            </div>
</body>
</html>

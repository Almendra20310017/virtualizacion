<?php

include("conexion.php");


$id = $_POST["txtid"];
$nombre = $_POST["txtnombre"];
$tipo = $_POST["txttipo"];
$precio = $_POST["txtprecio"];
if($id != "" && $nombre != "" && $tipo != ""  && $precio != ""){
				if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['guardardatos']))
				
				{
				$sqlgrabar = "INSERT INTO productos(Id_producto, Nombre, Tipo, Precio) values ('$id','$nombre','$tipo','$precio')";

			if(mysqli_query($conn,$sqlgrabar))
			{
				header("Location: editarpro.php");
			}else 
			{
				echo "Error: " .$sqlgrabar."<br>";
			}
					
					
				}
}else{
	echo "<script>
		alert('Algunos campos estan vacios, ingresalos de nuevo');
		
	</script>";
	

}




	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Borrar datos']))
	{
		header("Location: principal.php");
	}


	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['editardatos']))
	
	{
			$sqlmodificar = "UPDATE productos SET Nombre='$nombre',Tipo='$tipo',Precio='$precio' WHERE Id_producto='$id'";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: editarpro.php");
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM productos WHERE Id_producto='$id'";
            echo $sqleliminar;

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: editarpro.php");
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['buscarproducto']))
	
	{
		$search = "SELECT * FROM productos WHERE Id_producto = '$id'";

if(mysqli_query($conn,$search))
{

	//Aqui es donde vas a actualizar la tabla

	header("Location: editarpro.php?cod=" . $id);
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}
	

?>
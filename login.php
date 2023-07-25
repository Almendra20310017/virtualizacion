<?php

include 'conexion.php';

if(!$conn){
    die("Error" . mysqli_connect_error());
}

$email = $_POST["Correo"];
$contrasena = $_POST["Contraseña"];

$consulta = mysqli_query($conn, "SELECT * from usuario where Correo = '$email' AND Contraseña = '$contrasena'");

$rows = mysqli_num_rows($consulta);

if($rows > 0){
    session_start();

    $_SESSION['usuario'] = $email;
    echo "<script>
    alert('Logeado correctamente');
    location.href = 'index.html';
</script>";
}else{
    echo "<script>
    alert('Usuario no encontrado');
    location.href = 'login.html';
</script>";

}

mysqli_close($con);
?>
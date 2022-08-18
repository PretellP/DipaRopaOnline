<?php 
$conexion = new mysqli('localhost','root','','dipa');

if (isset($_POST['btnSave']))
{
    $nombre = $_POST['txtNmUs'];
    $apellido = $_POST['txtApel'];
    $correo = $_POST['txtCor'];
    $clave= md5($_POST['txtClave']);
    $dir = $_POST['txtDir'];
    $cod = $_POST['txtCoP'];
    $cel = $_POST['txtCel'];
    $dni = $_POST['txtDni'];

    $comando = "INSERT INTO usuarios(Nombres, Apellidos, Correo, Contraseña, Dirección, CódigoPostal, Celular, DNI) VALUES ('$nombre','$apellido','$correo','$clave','$dir','$cod','$cel','$dni')";
  
    mysqli_query($conexion,$comando);
    $conexion->close();
    header('location:login.php');
}

?>
<?php
    session_start();
    
    $Correo = $_POST["txtCorreo"];
    $Contraseña = md5($_POST['txtClave']);
    
    $conexion = new mysqli('localhost','root','','dipa');

    if ($conexion->connect_errno) 
    {
        echo "ERROR al conectar con la DB.";
        exit; 
    }

    $BuscaUsuario = "SELECT * FROM usuarios WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";  

    $consulta = $conexion->query($BuscaUsuario);

    $filas = mysqli_num_rows($consulta);

    $_SESSION['NoExiste']="";
    if($filas > 0)
    {
       $_SESSION['Correo']=$Correo;
        header('location:index.html'); 
    }
    else
    {
        $_SESSION['NoExiste']="Correo/Contraseña Incorrecto";
        header('location:login.php'); 
    }


?>
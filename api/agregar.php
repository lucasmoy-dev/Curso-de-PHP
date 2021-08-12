<?php

// http://localhost/sistema_php/api/agregar.php?nombre=Lucas&apellido=Tello&email=aasdasd@asdasd.com&telefono=234234&detalle=sdfsdf
  $conexion = new mysqli("localhost", "root", "", "sistema") or die("not connected".mysqli_connect_error());
  
  if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $detalle = $_GET['detalle'];

    $sql = "INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";

    $query = mysqli_query($conexion, $sql);
    if($query){
      echo"1 row inserted";
    }else{
      echo mysqli_error($conexion);
    }
  }
?>

<?php
include "../db.php";
if (isset($_POST['guardar'])) {

    $url="clientes.php";
    
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
  
 

$query = "INSERT INTO clientes (cedula_cliente, nombre_cliente, apellido_cliente, telefono_cliente) values ('$cedula','$nombre','$apellido','$telefono') ";
$guardador= mysqli_query($conn, $query); 




    if($guardador){
        echo "<script> window.location='$url'; </script>";
    }
   
}
?>
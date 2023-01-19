<?php
include "../db.php";
if (isset($_POST['guardar'])) {

    $url="proveedores.php";
    
    $descripcion = $_POST['descripcion'];
    $nombre = $_POST['nombre'];
    $mision = $_POST['mision'];
    $vision = $_POST['vision'];
  
 

$query = "INSERT INTO provedores (nombre_proveedor, descripcion_proveedor, mision_proveedor, vision_proveedor) values ('$nombre','$descripcion','$mision','$vision') ";
$guardador= mysqli_query($conn, $query); 




    if($guardador){
        echo "<script> window.location='$url'; </script>";
    }
   
}
?>
<?php
include "../db.php";
if (isset($_POST['guardar'])) {

    $url="index.php";
    
    $mision = $_POST['mision'];
    $vision = $_POST['vision'];
    $valores = $_POST['valores'];
    $nombre = $_POST['nombre'];
    
  
 

$query = "UPDATE informacion set mision='$mision', vision='$vision', valores='$valores', nombre_empresa='$nombre' where id_informacion='1' ";
$guardador= mysqli_query($conn, $query); 




    if($guardador){
        echo "<script> window.location='$url'; </script>";
    }
   
}
?>

<?php 
include("../db.php");


    $url="productos.php";
	$sql="SELECT numero FROM numero ";
	$resultado=mysqli_query($conn,$sql);
	$row_cnt=implode(mysqli_fetch_assoc($resultado));
    


if (isset($_POST['guardar'])) {


    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $nombre_archivo=$_FILES['archivo']['name'];
   
    $guardado=$_FILES['archivo']['tmp_name'];
    $nombre_archivo2=substr($nombre_archivo,-5,7);
    $nombre_archivo_final="foto".$row_cnt."_".$nombre_archivo2;  

    

  
  if(file_exists('archivos')){
      
	if(move_uploaded_file($guardado, 'archivos/'.$nombre_archivo_final)){
		
	}
	
  
  
  
    $query3 = "INSERT INTO productos(nombre_producto,precio_producto,foto_producto) values ('$nombre','$precio','$nombre_archivo_final') ";
    
    $guardador3= mysqli_query($conn, $query3);

      

    
    
    
    //actualizar el numero de tarea
	$numer= intval($row_cnt)+1;
	$sql5="UPDATE numero SET numero=$numer ";
	$ejecutar =mysqli_query($conn,$sql5); 
      

    if($guardador3){
    echo "<script> window.location='$url'; </script>";
    }
     


}

}

?>
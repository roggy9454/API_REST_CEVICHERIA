<?php
include "header.php";
include "../db.php";

$id = $_GET['id'];
  $query = "SELECT * FROM productos WHERE id_producto='$id' ";

  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

	
	$nombre = $row['nombre_producto'];
	$precio = $row['precio_producto'];
	

	
}






if (isset($_POST['update'])) {

  $id2 = $_POST['id2'];
  $nombre2 = $_POST['nombre2'];
  $precio2 = $_POST['precio2'];
  
  
  $url="productos.php";
  

  $query2 = "UPDATE productos set nombre_producto = '$nombre2', precio_producto = '$precio2'   WHERE id_producto=$id2";
    $guardador= mysqli_query($conn, $query2);
    
    if($guardador){
        echo "<script> window.location='$url'; </script>";
    }    
    
    

}



?>



<div class="container mt-3">
    
    <div class="row">
        
        
        <div class="col-md-3"></div>
            
        
        <div class="col-md-6">
            
            
            <!-- Default form contact -->
            <form class=" border border-light pt-3 pl-5 pr-5" action="editar_producto.php" method="POST">
            
                <p class="h4 mb-4 text-center">MODIFICAR DATOS DEL PRODUCTO</p>
            
                <!-- Name -->

            
                <!-- Email -->
                <label>Nombre</label>
                <input type="text" name="nombre2" class="form-control mb-2" value="<?php echo $nombre; ?>" >
            
                <label>Precio</label>
                <input type="text" name="precio2" class="form-control mb-2" value="<?php echo $precio; ?>" > 
                

                
                <input type="text" name="id2" class="form-control mb-2" value="<?php echo $id; ?>" style="display:none;" > 
            
                <!-- Send button -->
                <button name="update" class="btn btn-info btn-block" type="submit">MODIFICAR PRODUCTO</button>
            
            </form>
            <!-- Default form contact -->            
            
            
            
        </div>        
        
        
    </div>    
    
    
</div>
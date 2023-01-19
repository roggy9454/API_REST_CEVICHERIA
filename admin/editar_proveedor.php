<?php
include "header.php";
include "../db.php";

$id = $_GET['id'];
  $query = "SELECT * FROM provedores WHERE id_proveedor='$id' ";

  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $nombre = $row['nombre_proveedor'];
	$descripcion = $row['descripcion_proveedor'];
	$mision = $row['mision_proveedor'];
	$vision = $row['vision_proveedor'];

	
}






if (isset($_POST['update'])) {

  $id2 = $_POST['id2'];
  $nombre2 = $_POST['nombre2'];
  $descripcion2 = $_POST['descripcion2'];
  $mision2 = $_POST['mision2'];
  $vision2 = $_POST['vision2'];
  
  $url="proveedores.php";
  

  $query2 = "UPDATE provedores set nombre_proveedor = '$nombre2', descripcion_proveedor = '$descripcion2' , mision_proveedor = '$mision2' , vision_proveedor = '$vision2'  WHERE id_proveedor=$id2";
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
            <form class=" border border-light pt-3 pl-5 pr-5" action="editar_proveedor.php" method="POST">
            
                <p class="h4 mb-4 text-center">MODIFICAR DATOS DEL PROVEEDOR</p>
            

                <!-- Email -->
                <label>Nombre</label>
                <input type="text" name="nombre2" class="form-control mb-2" value="<?php echo $nombre; ?>" >
            
                <label>Descripción</label>
                <input type="text" name="descripcion2" class="form-control mb-2" value="<?php echo $descripcion; ?>" > 
                
                <label>Misión</label>
                <div class="form-group">
                    <textarea id="form35" class="form-control rounded-0" name="mision2" rows="3" ><?php echo $mision; ?></textarea>
                </div>
                
                <label>Visión</label>
                <div class="form-group">
                    <textarea id="form35" class="form-control rounded-0" name="vision2" rows="3" ><?php echo $vision; ?></textarea>
                </div>
                
                <input type="text" name="id2" class="form-control mb-2" value="<?php echo $id; ?>" style="display:none;" > 
            
                <!-- Send button -->
                <button name="update" class="btn btn-info btn-block" type="submit">MODIFICAR</button>
            
            </form>
            <!-- Default form contact -->            
            
            
            
        </div>        
        
        
    </div>    
    
    
</div>
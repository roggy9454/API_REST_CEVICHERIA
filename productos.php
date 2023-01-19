<?php
include "header.php";
include "db.php";
?>



<div class="container">
    
    <div class="row">
        



<?php 
$sql="SELECT * FROM productos ";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_assoc($result))

{
?>

<div class="col-md-4 mb-3 text-center">
<div class="card">
  <div class="card-body text-center">
    <h5 class="card-title"><?php echo $mostrar["nombre_producto"]; ?></h5>
    <img class="rounded mx-auto d-block" src="admin/archivos/<?php echo $mostrar["foto_producto"]; ?>" style="height:80px">
    
    <a>$<?php echo $mostrar["precio_producto"]; ?></a>
  </div>
</div>    
</div>        


<?php } ?>        
        
    </div>
    
</div>




<?php
include "footer.php";
?>
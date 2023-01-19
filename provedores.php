<?php
include "header.php";
include "db.php";
?>



<div class="container">
    
    <div class="row">
        



<?php 
$sql="SELECT * FROM provedores ";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_assoc($result))

{
?>

<div class="col-md-4 mb-3 text-center">
<div class="card">
  <div class="card-body text-center">
    <h3 class="h3 card-title"><?php echo $mostrar["nombre_proveedor"]; ?></h5>
    
    
    
  </div>
</div>    
</div>        


<?php } ?>        
        
    </div>
    
</div>




<?php
include "footer.php";
?>
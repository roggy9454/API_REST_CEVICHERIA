<?php
include "header.php";
include "../db.php";
?>

<style>

.div-fixed {
position: fixed;
text-align: center;
word-wrap: break-word;
}

</style>




<div class="row mt-5">
    

    
<div class="col-md-10 ml-5  z-depth-1 rounded">

<h2 class="h2 text-center font-weight-bold mt-2 mb-2"><img src="../img/clientes.png" style="height:50px;margin-right:10px">Lista de Productos Registrados</h2>
  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Shopping Cart table -->
    <div class="table-responsive">
        
        
        

        
        
        

      <table class="table product-table mb-0">

        <!-- Table head -->
        <thead class="mdb-color lighten-5">
          <tr>
            <th>#</th>
            <th class="font-weight-bold">
              <strong>Nombre</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Precio</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Foto</strong>
            </th>

            
            <th class="font-weight-bold">
              <strong>Acción</strong>
            </th>

          </tr>
        </thead>
        <!-- /.Table head -->

        <!-- Table body -->
        <tbody>

 



<?php    
$c=0;
$query = "SELECT * from productos ";
$resultados = mysqli_query($conn, $query);    

while($row = mysqli_fetch_assoc($resultados)) {
    
$c=$c+1;
?>


<tr>
    
    <td><?php echo $c; ?></td>
    <td class="text-uppercase"><?php echo $row['nombre_producto']; ?></td>
    <td class="text-uppercase"><?php echo $row['precio_producto']; ?></td>
    <td class="text-uppercase"><img src="archivos/<?php echo $row['foto_producto']; ?>" style="height:60px"></td>
    
    <td>
    <a href="editar_producto.php?id=<?php echo $row['id_producto'];  ?>" type="button" class="btn btn-warning mr-2"><i class="fas fa-pen"></i></button>
    <a href="eliminar_producto.php?id=<?php echo $row['id_producto'];  ?>" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
    </td>
    
    
</tr>


<?php } ?>





        </tbody>
        <!-- /.Table body -->

      </table>

    </div>
    <!-- /.Shopping Cart table -->
    
    

    
    
    
    

  </section>
  <!--Section: Content-->
  
  

</div>




    <div class="col-md-1 mt-5">
        <a class="btn btn-primary div-fixed" data-toggle="modal" data-target="#modalContactForm"><i class="fas fa-plus"></i></a>
    </div>
    

<!-- BOTON FLOTANTE -->



</div>







    







<form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ingrese la información del producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
          
          
        <div class=" mb-3">
          <input type="text" id="form34" class="form-control" name="nombre" placeholder="Nombre" required>
        </div>


        <div class=" mb-3">
          
          <input type="text" id="form35" class="form-control" name="precio" placeholder="Precio" required>
          
        </div>
        
        
        <div class="mb-3">

                	<div class="custom-file mb-3">
                    	<input type="file" name="archivo" class="custom-file-input" id="customFileLang" lang="es">
                    	<label class="custom-file-label" for="customFileLang">Foto del producto</label>
                    	
                	</div>
        </div>
        
        


     

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="guardar" class="btn btn-unique">Guardar <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>


<?php
include "footer.php";
?>

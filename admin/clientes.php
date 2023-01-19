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

<h2 class="h2 text-center font-weight-bold mt-2 mb-2"><img src="../img/clientes.png" style="height:50px;margin-right:10px">LISTA DE  CLIENTES</h2>
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
              <strong>Cédula</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Nombre</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Apellido</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Teléfono</strong>
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
$query = "SELECT * from clientes ";
$resultados = mysqli_query($conn, $query);    

while($row = mysqli_fetch_assoc($resultados)) {
    
$c=$c+1;
?>


<tr>
    
    <td><?php echo $c; ?></td>
    <td class="text-uppercase"><?php echo $row['cedula_cliente']; ?></td>
    <td class="text-uppercase"><?php echo $row['nombre_cliente']; ?></td>
    <td class="text-uppercase"><?php echo $row['apellido_cliente']; ?></td>
    <td class="text-uppercase"><?php echo $row['telefono_cliente']; ?></td>
    <td>
    <a href="editar_cliente.php?id=<?php echo $row['id_cliente'];  ?>" type="button" class="btn btn-warning mr-2"><i class="fas fa-pen"></i></button>
    <a href="eliminar_cliente.php?id=<?php echo $row['id_cliente'];  ?>" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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







    







<form action="guardar_clientes.php" method="POST">
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">INGRESE LA INFORAMACIÓN DEL CLIENTE</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
          
          
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control" name="cedula" required>
          <label for="form34">Cédula</label>
        </div>


        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form35" class="form-control" name="nombre" required>
          <label for="form35">Nombres</label>
        </div>
        
        
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form36" class="form-control" name="apellido" required>
          <label for="form36">Apellidos</label>
        </div>
        
        
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form37" class="form-control" name="telefono">
          <label for="form37">Teléfono</label>
        </div>

     

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="guardar" class="btn btn-unique">GUARDAR REGISTRO<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>


<?php
include "footer.php";
?>

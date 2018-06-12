<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/institucion_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $institucion = $institucion->getinstitucion($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

       
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>INSTITUCIONES</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Lista de instituciones
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-inline form-padding">
                    <form action="institucionLista.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Buscar institucion">
                        <button type="submit" name="submitsearch" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>                                
                    <a href="agregarInstitucion.php" class="btn btn-primary" ><i class='fa fa-university'></i> Registrar Institucion</a>  
                    </form>
                </div>
            </div>
        </div>
        <!--/.row -->
        <hr />   
        <div class="row">
  
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Eliminar</th>                   
                                  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c = 1; ?>
                            <?php while($row = mysql_fetch_array($institucion)): ?>                            
                                <tr>
                                    <td> <?php echo $c;?></td>
                                     <td><a href="edit.php?type=institucion&id=<?php echo $row['codigo']?>"><?php echo $row['codigo'];?></a></td>
                                     <td><?php echo $row['nombre'];?></td>
                                     <td><a  href="eliminarIns.php?codigoI=<?php echo $row['codigo'];?>" title="Remove"><i class="fa fa-times-circle fa-2x text-danger "></i></a></td>
                                    
                                </tr>
                            <?php $c++; ?>
                            <?php endwhile; ?>
                            <?php if(mysql_num_rows($institucion) < 1): ?>
                                <tr>
                                    <td colspan="5" class="bg-danger text-danger text-center">SIN REGISTRO</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
 
</div>
 
<?php include('include/modal.php'); ?>
<?php include('include/footer.php'); ?>
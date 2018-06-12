<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/ubicacion_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $ubicacion = $ubicacion->getubicacion($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>UBICACION</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        LISTA DE UBICACION
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-inline form-padding">
                    <form action="ubicacionLista.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Buscar ubicacion">
                        <button type="submit" name="submitsearch" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>                                          
                       <a href="agregarUbicacion.php" class="btn btn-primary" ><i class='fa fa-sitemap'></i> Registrar Ubicacion</a>  
                    </form>

                </div>
            </div>
        </div>
        <!--/.row -->
        <hr />   

        <div class="row">
            <div class="col-lg-12">
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Codigo Sector</th>
                                <th>Nombre</th>
                               <th>Codigo Institucion</th>                                 
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c = 1; ?>
                            <?php while($row = mysql_fetch_array($ubicacion)): ?>                            
                                <tr>
                                    
                                    <td><?php echo $row['idSector'];?></td>
                                 <td><?php echo $row['codigoS'];?></td>
                                    <td><?php echo $row['nombreS'];?></td>
                                    <td><?php echo $row['codigo'];?></td>
                                           
                                </tr>
                            <?php $c++; ?>
                            <?php endwhile; ?>
                            <?php if(mysql_num_rows($ubicacion) < 1): ?>
                                <tr>
                                    <td colspan="5" class="bg-danger text-danger text-center">*SIN REGISTROS*</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->    
<?php include('include/modal.php'); ?>
<?php include('include/footer.php'); ?>
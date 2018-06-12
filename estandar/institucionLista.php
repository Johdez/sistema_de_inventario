<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/institucion_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $institucion = $institucion->getinstitucion($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>INSTITUCION</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Institucion Responsable
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
         
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
                                                
                                  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c = 1; ?>
                            <?php while($row = mysql_fetch_array($institucion)): ?>                            
                                <tr>
                                    <td> <?php echo $c;?></td>
                                      <td><?php echo $row['codigo'];?></td>
                                     <td><?php echo $row['nombre'];?></td>
                                
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
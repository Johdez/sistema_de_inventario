<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/equipo_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $equipo = $equipo->getEquipo($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>EQUIPOS</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                       <li>
                        <i class="fa fa-table"></i> <a href="inventario.php">Inventario</a>
                    </li>
                    <li class="active">
                        Equipos
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-inline form-padding">
                    <form action="equipoIndex.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Buscar Equipo">
                        <button type="submit" name="submitsearch" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>                                
                  <a href="agregarEquipo.php" class="btn btn-primary" ><i class='fa fa-desktop'></i> Registrar Equipo</a>
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
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                  <th>Codigo</th>
                                <th>Descripcion</th>
                                  <th>Categoria</th>
                                <th>Marca</th>
                                 <th>Modelo</th>
                                <th>Valor</th>
                                <th>Fecha Recepcion</th>
                                <th>Fecha Adquisicion</th>
                                <th>Estado</th>   
                                <th>Ubicacion</th>
                                <th>Institución</th>

                               
                            </tr>
                        </thead>
                        <tbody>
                                     <?php $c = 1; ?>
                            <?php while($row = mysql_fetch_array($equipo)): ?>                            
                                <tr>
                                    
                                     <td><?php echo $row['codigoE'];?></td>
                                    <td><?php echo $row['descripcion'];?></td>
                                   <td><?php echo $row['nombreC'];?></td>
                                    <td><?php echo $row['marca'];?></td>
                                    <td><?php echo $row['modelo'];?></td>
                                    <td><?php echo $row['valor'];?></td>
                                    <td><?php echo $row['fechaR'];?></td>
                                    <td><?php echo $row['fechaA'];?></td>       
                                    <td><?php echo $row['estado'];?></td>        
                                    <td><?php echo $row['codigoS'];?></td>
                                    <td><?php echo $row['codigo'];?></td>

                                </tr>
                            <?php $c++; ?>
                            <?php endwhile; ?>
                            <?php if(mysql_num_rows($equipo) < 1): ?>
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
<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/categoria_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $categoria = $categoria->getCategoria($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>CATEGORIAS</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Categorias
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-inline form-padding">
                    <form action="categoriaLista.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Buscar Categoria">
                        <button type="submit" name="submitsearch" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>                                
                        <a href="agregarCategoria.php" class="btn btn-primary" ><i class='fa fa-bar-chart-o'></i> Registrar Categoria</a>  
            
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
                                <th>Nombre Categoria</th>
                                 <th>Tipo</th>
                                 <th>Eliminar</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                             <?php $c = 1; ?>
                            <?php while($row = mysql_fetch_array($categoria)): ?>                            
                                <tr>
                                    
                                    <td><?php echo $c;?></td>
                                     <td><a href="edit.php?type=categoria&id=<?php echo $row['codigoC']?>"><?php echo $row['codigoC'];?></a></td>
                                    <td><?php echo $row['nombreC'];?></td>              
                                    <td><?php echo $row['tipo'];?></td>   
                                    
                                      <td><a  href="eliminarCat.php?codigoC=<?php echo $row['codigoC'];?>" title="Remove"><i class="fa fa-times-circle fa-2x text-danger "></i></a></td>
                                     
                                           

                                </tr>
                            <?php $c++; ?>
                            <?php endwhile; ?>
                            <?php if(mysql_num_rows($categoria) < 1): ?>
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


</div>
<!-- /#page-wrapper -->    
<?php include('include/modal.php'); ?>
<?php include('include/footer.php'); ?>
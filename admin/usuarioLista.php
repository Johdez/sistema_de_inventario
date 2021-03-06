<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/usuarioL_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $usuarios = $usuarios->getUsuarios($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>USUARIOS</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Lista de usuarios
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-inline form-padding">

                    <form action="usuarioLista.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Buscar Usuarios">
                        <button type="submit" name="submitsearch" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>  
                        <a href="agregarUsuario.php" class="btn btn-primary" ><i class='fa fa-user'></i> Registrar Usuario</a>                              
                        
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
                                <th>Id</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                               
                                 <th>Usuario</th>
                                <th>Rol</th>
                                 <th>Responsable</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c = 1; ?>
                            <?php while($row = mysql_fetch_array($usuarios)): ?>                            
                                <tr>
                                    
                                    <td><?php echo $row['id_usuario'];?></td>
                                    <td> <?php echo $row['nombres'];?></td>
                                    <td><?php echo $row['apellidos'];?></td>
                                    <td><?php echo $row['usuario'];?></td>
                                    <td><?php echo $row['rol'];?></td>
                                    <td><?php echo $row['codigo'];?></td>

                                </tr>
                            <?php $c++; ?>
                            <?php endwhile; ?>
                            <?php if(mysql_num_rows($usuarios) < 1): ?>
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
 
<?php include('include/modal.php'); ?>
<?php include('include/footer.php'); ?>
<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/configuraciones_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $user = $configuraciones->getUsuario($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                <small>Usuarios</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Usuarios
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <?php if(isset($_GET['r']) && $_GET['r']=='deleted'): ?>
                    <div class="alert alert-danger">
                        <strong>Registro Eliminado</strong>
                    </div>
                <?php endif; ?>
                <div class="form-inline form-padding">
                    <form action="usuario.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Buscar por usuario">
                        <button type="submit" name="submitsearch" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>                                                                 
                    </form>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead><tr>
                            <th>Id</th>    
                            <th>Nombres</th>    
                            <th>Apellidos</th>    
                             <th>Dui</th>    
                               
                             
                             <th>Telefono</th>    
                            <th>Sexo</th>  
                             <th>Email</th>    
                            <th>Usuario</th>  
                            <th>Password</th>    
                            <th>Rol</th>  
                            <th>Codigo</th>  
                            <th>Eliminar</th>    

                        </tr></thead>
                        <tbody>
                        <?php while($row = mysql_fetch_array($user)): ?>
                            <tr>
                                <td><?php echo $row['id_usuario'];?></td>
                                 <td><a href="edit.php?type=usuario&id=<?php echo $row['id_usuario']?>"><?php echo $row['nombres'];?></a></td>
                                <td><?php echo $row['apellidos'];?></td>
                                <td><?php echo $row['dui'];?></td>
                                
                               
                                <td><?php echo $row['telefono'];?></td>
                                <td><?php echo $row['sexo'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['usuario'];?></td>
                                <td><a href="configuracion.php?username=<?php echo $row['id_usuario'];?>">Modificar</a></td>
                               <td><?php echo $row['rol'];?></td>
                               <td><?php echo $row['codigo'];?></td>
                               <td><a  href="eliminarUs.php?us=<?php echo $row['id_usuario'];?>" title="Remove"><i class="fa fa-times-circle fa-2x text-danger "></i></a></td>
                                        
                               
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
  

</div>
<!-- /#page-wrapper -->    
<?php include('include/footer.php');
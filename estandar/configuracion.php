<?php
    include('include/header.php');
    include('include/sidebar.php');
    $username = isset($_GET['username']) ? $_GET['username'] : $_SESSION['id'];
?>
<div id="page-wrapper">

    <div class="container-fluid">

     
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Configuraciones <small>Cambiar la contraseña</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Cambiar contraseña
                    </li>
                </ol>
            </div>
        </div>
        
         <div class="row">
            <div class="col-lg-12">
                <?php if(isset($_GET['msg'])): ?>
                    <?php if($_GET['msg']=='success'){
                            echo '
                                <div class="alert alert-success">
                                    <strong>Contraseña Modificada</strong>
                                </div>
                            ';
                        }else{
                             echo '
                                <div class="alert alert-danger">
                                    <strong>Contraseña Incorrecta. Por favor intente de nuevo</strong>
                                </div>
                            ';
                        }
                        
                    ?>
                <?php endif;?>


                <form action="data/configuraciones_model.php?q=cambioCon&username=<?php echo $username;?>" method="post">
                    <div class="form-group">
                        <label>Contraseña actual</label>
                        <input type="password" name="con" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nueva contraseña</label>
                        <input type="password" name="nuevo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirmar contraseña</label>
                        <input type="password" name="confirmar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg" name="submit">Modificar Contraseña</button>
                </form>  
             </div>
        </div>
       


    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->    
<?php include('include/footer.php');
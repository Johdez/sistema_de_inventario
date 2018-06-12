<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/class_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $class = $class->getclass($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Informacion de Administrador</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Informacion
                    </li>
                </ol>
            </div>
        </div>

        <hr />   
        <div class="row">
      
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                     
                        </thead>
                        <tbody>
      
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
<?php
    include('include/header.php');
    include('include/sidebar.php');
    include('data/categoria_model.php');
    
    $search = isset($_POST['search']) ? $_POST['search']: null;
    $categoria = $categoria->getCategoria($search);
?>
<div id="page-wrapper">

    <div class="container-fluid">

      
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>REPORTES</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Generar Reporte
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
Mobiliario
       
        <hr />   
        <div class="row">
            <a href="ReporteWord.php" class="btn btn-primary" ></i>Libre Office-Writer</a> 
             <a href="ReporteExcel.php" class="btn btn-primary" ></i>Libre Office-Cal</a>  
        </div>
            <div class="row">
           
        </div>


    </div>


</div>
<!-- /#page-wrapper -->    
<?php include('include/modal.php'); ?>
<?php include('include/footer.php'); ?>
<?php
    include('include/header.php');
    include('include/sidebar.php');

?>
<div id="page-wrapper">

    <div class="container-fluid">

      
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>INVENTARIO</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i> <a href="index.php">Inicio</a>
                    </li>
                    <li class="active">
                        Inventario
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
                        <tr>
                            <td>
                                 <h1>
                                 <small>Mobiliario</small>
                                  </h1>
                            </td>
                            <td><a href="mobiliarioIndex.php"><img src="include/mobil.png" width="100" height="100"></a></td>
                        </tr>

                        <tr><td></td>
                            <td></td></tr>

                        <tr>
                            <td>
                                <h1>
                                 <small>Equipo</small>
                                </h1>
                            </td>
                            <td><a href="equipoIndex.php"><img src="include/eq.png" width="100" height="100"></a></td>

                        </tr>
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
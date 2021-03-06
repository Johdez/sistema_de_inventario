<?php
    include('include/header.php');
    include('include/sidebar.php');  

    $r1 = mysql_query('select count(*) from categoria');
    $count1 = mysql_fetch_array($r1);

    $r2 = mysql_query('select count(*) from sector');
    $count2 = mysql_fetch_array($r2);

    $r3 = mysql_query('select count(*) from mobiliario');
    $count3 = mysql_fetch_array($r3);

    $r4 = mysql_query('select count(*) from equipo');
    $count4 = mysql_fetch_array($r4);
?>



<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Panel de control</small>
                   
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-tasks"></i> Opciones
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $count1[0]; ?></div>
                                <div>Categorias</div>
                            </div>
                        </div>
                    </div>
                    <a href="categoriaLista.php">
                        <div class="panel-footer">
                            <span class="pull-left">Detalles</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-sitemap fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $count2[0]; ?></div>
                                <div>Ubicacion</div>
                            </div>
                        </div>
                    </div>
                    <a href="ubicacionLista.php">
                        <div class="panel-footer">
                            <span class="pull-left">Detalles</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-archive fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $count3[0]; ?></div>
                                <div>Mobiliario</div>
                            </div>
                        </div>
                    </div>
                    <a href="mobiliarioIndex.php">
                        <div class="panel-footer">
                            <span class="pull-left">Detalles</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-desktop fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $count4[0]; ?></div>
                                <div>Equipo</div>
                            </div>
                        </div>
                    </div>
                    <a href="equipoIndex.php">
                        <div class="panel-footer">
                            <span class="pull-left">Detalles</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->



    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->    
<?php include('include/footer.php');
<?php 
    include('../config.php'); 
    $level = isset($_SESSION['level']) ? $_SESSION['level']: null;
    if($level == null){
        header('location:../index.php');
    }else if($level != 'estandar'){
        header('location:../'.$level.'');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Panel de Usuario</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/sb-admin.css" rel="stylesheet">

  
    <link href="../css/plugins/morris.css" rel="stylesheet">


    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body>

    <div id="wrapper">

      
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Admin</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Panel de Usuario</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['id']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>

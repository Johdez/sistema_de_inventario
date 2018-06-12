<?php
    $configuraciones = new DataConfiguraciones();
    if(isset($_GET['q'])){
        $configuraciones->$_GET['q']();
    }

    class DataConfiguraciones {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //cambiar la contraseña
        function cambioCon(){
            include('../../config.php');
            $username = $_GET['username'];
            $con = ($_POST['con']);
            $nuev = ($_POST['nuevo']);
            $confirm = ($_POST['confirmar']);
            $q = "select * from usuarios where usuario='$username' and password='$con'";
            $r = mysql_query($q);
            if(mysql_num_rows($r) > 0){
                if($nuev == $confirm){
                    $r2 = mysql_query("update usuarios set password='$nuev' where usuario='$username' and password='$con'");
                    header('location:../configuracion.php?msg=success&username='.$username.'');   
                }else{
                    header('location:../configuracion.php?msg=error&username='.$username.'');   
                }
            }else{
                header('location:../configuracion.php?msg=error&username='.$username.'');   
            }   
        }


        
        function getUsuario($search){
            $user = $_SESSION['id'];
            $q = "select * from usuarios where usuario !='$user' and usuario like '%$search%' order by id_usuario asc";   
            $r = mysql_query($q);
            return $r;
        }
    }
?>

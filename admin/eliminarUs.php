<?php


    include('include/header.php');

   
    $us=$_GET['us'];



$q = "DELETE  FROM usuarios WHERE id_usuario='$us'";
$rs = mysql_query($q);
if($rs == false) {
	header("location:usuario.php");
}else{
	header("location:usuario.php");
}

?>
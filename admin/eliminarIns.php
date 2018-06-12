<?php


    include('include/header.php');

    $codigI = $_GET['codigoI'];
    


$q = "DELETE  FROM institucion WHERE codigo='$codigI'";
$rs = mysql_query($q);
if($rs == false) {
	header("location: institucionLista.php");
}else{
	header("location: institucionLista.php");
}

?>
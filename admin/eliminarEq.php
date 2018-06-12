<?php


    include('include/header.php');

    $codigE = $_GET['equipo'];
    


$q = "DELETE  FROM equipo WHERE codigoE='$codigE'";
$rs = mysql_query($q);
if($rs == false) {
	header("location: equipoIndex.php");
}else{
	header("location: equipoIndex.php");
}

?>
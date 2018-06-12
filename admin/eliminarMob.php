<?php


    include('include/header.php');

    $codigM = $_GET['mobil'];
    


$q = "DELETE  FROM mobiliario WHERE codigoM='$codigM'";
$rs = mysql_query($q);
if($rs == false) {
	header("location: mobiliarioIndex.php");
}else{
	header("location: mobiliarioIndex.php");
}

?>
<?php


    include('include/header.php');

    $codig = $_GET['codigoC'];
    


$q = "DELETE  FROM categoria WHERE codigoC='$codig'";
$rs = mysql_query($q);
if($rs == false) {
	header("location: categoriaLista.php");
}else{
	header("location: categoriaLista.php");
}

?>
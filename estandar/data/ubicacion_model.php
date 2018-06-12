<?php

    $ubicacion = new Dataubicacion();
    if(isset($_GET['q'])){
        $ubicacion->$_GET['q']();
    }
    class Dataubicacion {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //obtener toda la informacion de las ubicaciones
        function getubicacion($search){
            $q = "select * from sector where codigoS like '%$search%' or nombreS like '%$search%' or codigo like '%$search%' order by idSector,nombreS,codigoS";
            $r = mysql_query($q);
            
            return $r;
        }
        
        //obtener las ubicaciones mediante su codigo
        function getubicacionID($id){
            $q = "select * from sector where CodigoS=$id";
            $r = mysql_query($q);
            
            return $r;
        }


    }
?>
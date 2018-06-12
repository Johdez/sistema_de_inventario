<?php

    $mobiliario = new DataMobiliario();
    if(isset($_GET['q'])){
        $mobiliario->$_GET['q']();
    }
    class DataMobiliario {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //obtener todos los mobiliarios
        function getMobiliario($search){
             $q = "select M.codigoM, M.marca, M.modelo, M.valor, M.fechaR, M.fechaA, M.descripcion, M.estado, C.nombreC, S.codigoS, M.codigo from mobiliario AS M INNER JOIN categoria AS C ON M.codigoC=C.codigoC INNER JOIN sector AS S ON M.idSector=S.idSector where M.codigoM like '%$search%'  or M.marca like '%$search%' or M.modelo like '%$search%' or M.estado like '%$search%' or M.descripcion like '%$search%' or C.nombreC like '%$search%' order by M.codigoM asc";
           
            $r = mysql_query($q);
            
            return $r;
        }
        //obtener por codico
        function getMobiliarioID($id){
             $q = "select * from mobiliario where codigoM like '%$search%'  or marca like '%$search%' or modelo like '%$search%' or estado like '%$search%' order by codigoM asc";
           
            $r = mysql_query($q);
            
            return $r;
        }
       
        

    }
?>
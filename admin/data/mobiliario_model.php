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


                function updateMobiliario(){
            include('../../config.php');
            $codigoM = $_POST['codigoM'];
            $numero = $_POST['numero'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $valor = $_POST['valor'];
            $fechaR = $_POST['fechaR'];
            $fechaA = $_POST['fechaA'];
            $descripcion = $_POST['descripcion'];
            $estado = $_POST['estado'];
            $codigoC = $_POST['codigoC'];
            $idSector = $_POST['idSector'];
            $codigo = $_POST['codigo'];
    
           
           $q="update mobiliario set marca='$marca', modelo='$modelo', valor='$valor', fechaR='$fechaR', fechaA='$fechaA',descripcion='$descripcion',estado='$estado',codigoC='$codigoC', idSector='$idSector', codigo='$codigo' where codigoM='$codigoM'"; 

            mysql_query($q);
            header('location:../mobiliarioIndex.php?r=updated');
        }

       

    }
?>
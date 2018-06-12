<?php
    $categoria = new DataCategoria();
    if(isset($_GET['q'])){
        $categoria->$_GET['q']();
    }
    class DataCategoria {
        
        function __construct(){
            if(!isset($_SESSION['id'])){
                header('location:../../');   
            }
        }
        
        //get all subjects
        function getCategoria($search){
            $q = "select * from categoria where codigoC like '%$search%' or nombreC like '%$search%' or tipo like '%$search%' order by codigoC asc";
            $r = mysql_query($q);
            
            return $r;
        }
        //get subject by ID
        function getCategoriaID($id){
            $q = "select * from categoria where codigoC=$id";
            $r = mysql_query($q);
            
            return $r;
        }



        

    }
?>
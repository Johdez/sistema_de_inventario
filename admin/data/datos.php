<?php
    $dato = new Dato();
    if(isset($_GET['q']))
    {
        $dato->$_GET['q']();
    }
    class Dato
     {
        
        function __construct(){
            if(!isset($_SESSION['id']))
            {
                header('location:../../');   
            }
        }


        
        //ELMINAR


    }
?>

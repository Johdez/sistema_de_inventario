<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'inventario';

    mysql_connect($host,$user,$pass) or die(mysql_error());
    mysql_select_db($db);

?>

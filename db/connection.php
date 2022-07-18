<?php
    /*Primero incluimos la página "pdoconfig.php" para poder utilizar sus datos y conectarnos así a nuestra BBDD.*/
    require "pdoconfig.php";

    /*Con esto creamos una conexión con nuestra BBDD con los datos existentes en la página de "pdoconfig.php".*/
    $connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$username,$password,$options);
?>

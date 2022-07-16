<?php
    /*Primero incluimos la página "pdoconfig.php" para poder utilizar sus datos y conectarnos así a nuestra BBDD.*/
    require_once "pdoconfig.php";
    $connection = new PDO("mysql: host=".$host."; dbname=".$dbname, $username, $password, $options);
?>

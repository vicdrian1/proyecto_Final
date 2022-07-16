<?php
    /*Primero incluimos la página "pdoconfig.php" para poder utilizar sus datos y conectarnos así a nuestra BBDD.*/
    require_once "pdoconfig.php";
    $connection = new PDO("mysql: host=".$host."; port=3306; dbname=".$dbname, $username, $password, $options);
?>

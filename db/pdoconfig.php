<?php

    /*Aquí se encuentran los datos necesarios para poder conectarnos a nuestra BBDD, el nombre del host, de la BBDD, del usuario y la contraseña.*/
    $host = "127.0.0.1";
    $dbname = "genshin_test2";
    $username = "myGenshin";
    $password = "0000";

    $options = [
        \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES  => false
    ];
?>
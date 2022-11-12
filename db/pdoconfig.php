<?php

    /*Aquí se encuentran los datos necesarios para poder conectarnos a nuestra BBDD, el nombre del host, de la BBDD, del usuario y la contraseña.*/
    $host = "containers-us-west-120.railway.app";
    $dbname = "h7da0xvpl14qj235";
    $username = "root";
    $password = "eAEfVStiGewAWOzU0Itn;

    /*Aquí le damos unos atributos por defecto a nuestra conexión.*/
    $options = [
        \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES  => false
    ];
?>

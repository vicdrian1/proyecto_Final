<?php

    /*Aquí se encuentran los datos necesarios para poder conectarnos a nuestra BBDD, el nombre del host, de la BBDD, del usuario y la contraseña.*/
    $host = "oliadkuxrl9xdugh.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
    $dbname = "h7da0xvpl14qj235";
    $username = "xiy3is6fz4kurfhw";
    $password = "dhn1aptrlw6bttjj";

    $options = [
        \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES  => false
    ];
?>

<?php
//Con estos datos obtenemos TODOS los datos de la tabla "personajes" de nuestra BBDD. Además, los ordenamos por orden alfabético según el nombre.
try{
    /*Aquí creamos una variable en la que almacenaremos todos los datos de los personajes mediante un select.*/
    $ids = $connection->query("SELECT * FROM personajes ORDER BY personajes.nombre" )->fetchAll();
}catch(Exception $error){
    /*en caso de que falle el proceso anterior, aparecerá este mensaje.*/
    echo "<p>Lo sentimos, algo ha fallado.</p>";
}
?>
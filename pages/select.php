<?php
//Con estos datos obtenemos TODOS los datos de la tabla "personajes" de nuestra BBDD. Además, los ordenamos por orden alfabético según el nombre.
try{
    $ids = $connection->query("SELECT * FROM personajes ORDER BY personajes.nombre" )->fetchAll();
}catch(Exception $error){
    echo "<p>Lo sentimos, algo ha fallado.</p>";
}
?>

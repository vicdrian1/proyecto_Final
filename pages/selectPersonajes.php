<?php

if(isset($_POST["cartaPersonaje"])){

    try{
        include "../db/pdoconfig.php";
        $connection = new PDO("mysql: host=".$host."; dbname=".$dbname, $username, $password, $options);
 
        $id_personaje = $_POST["cartaPersonaje"];
 
        $personajes = $connection->query("SELECT personaje.id, personaje.nombre AS nombrePJ, personaje.imgElem, personaje.imgSplash, personaje.imgPerfil, i1.imagen AS item1, i1.cantidad AS i1Cant, 
        i2.imagen AS item2, i2.cantidad AS i2Cant,
        i3.imagen AS item3, i3.cantidad AS i3Cant,
        i4.imagen AS item4, i4.cantidad AS i4Cant,
        i5.imagen AS item5, i5.cantidad AS i5Cant,
        i6.imagen AS item6, i6.cantidad AS i6Cant,
        i7.imagen AS item7, i7.cantidad AS i7Cant,
        i8.imagen AS item8, i8.cantidad AS i8Cant,
        i9.imagen AS item9, i9.cantidad AS i9Cant,
        i10.imagen AS item10, i10.cantidad AS i10Cant,
        i11.imagen AS item11, i11.cantidad AS i11Cant,
        i12.imagen AS item12, i12.cantidad AS i12Cant,
        i13.imagen AS item13, i13.cantidad AS i13Cant,
        i14.imagen AS item14, i14.cantidad AS i14Cant,
        i15.imagen AS item15, i15.cantidad AS i15Cant, 
        i16.imagen AS item16, i16.cantidad AS i16Cant
        FROM personajes AS personaje
        JOIN items AS i1 ON personaje.id_item1 = i1.id
        JOIN items AS i2 ON personaje.id_item2 = i2.id
        JOIN items AS i3 ON personaje.id_item3 = i3.id
        JOIN items AS i4 ON personaje.id_item4 = i4.id
        JOIN items AS i5 ON personaje.id_item5 = i5.id
        JOIN items AS i6 ON personaje.id_item6 = i6.id
        JOIN items AS i7 ON personaje.id_item7 = i7.id
        JOIN items AS i8 ON personaje.id_item8 = i8.id
        JOIN items AS i9 ON personaje.id_item9 = i9.id
        JOIN items AS i10 ON personaje.id_item10 = i10.id
        JOIN items AS i11 ON personaje.id_item11 = i11.id
        JOIN items AS i12 ON personaje.id_item12 = i12.id
        JOIN items AS i13 ON personaje.id_item13 = i13.id
        JOIN items AS i14 ON personaje.id_item14 = i14.id
        JOIN items AS i15 ON personaje.id_item15 = i15.id
        JOIN items AS i16 ON personaje.id_item16 = i16.id WHERE personaje.id='".$id_personaje."'" )->fetchAll();
 
        echo json_encode($personajes);
 
     }catch(Exception $error){
         echo $error;
     }
    } 
?>

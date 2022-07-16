<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Etiquetas meta del proyecto. Necesarias para un buen posicionamiento web. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Busca aquí los materiales necesarios para ascender a tus personajes favoritos.">
    <meta name="keywords" content="genshin, impact, ascension, cards">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">

    <title>Genshin Ascension Cards</title>
    <!-- Enlazamos el cdn de jquery para poder acceder a la librería de plugins. -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Enlazamos la fuente de google "Open Sans" para poder usarla en nuestra documento. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Enlazamos font-awesome para los iconos que utilizaremos en la web. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Enlazamos nuestro archivo css para poder darle estilo a nuestro documento. -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Aquí se encuentra nuestro menú de navegación, formado por un logo y un título por un lado y las secciones por otro. -->
    <nav id="slide_nav">
        <div class="menu_logo">
            <img class="logo" src="img/logo.png" alt="">
            <h1>Genshin Ascension Cards</h1>
        </div>

        <!-- Este es el menú hamburguesa que aparecerá solo cuando la pantalla tenga cierta resolución. -->
        <div id="burger_menu">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>

        <!-- Lista de los elementos de navegación de la web, con un menú social. -->
        <ul class="menu_items">
            <li class="menu_item"><a href="#">Sobre Nosotros</a></li>
            <li class="menu_item"><a href="#">Colabora</a></li>
            <li class="menu_item"><a href="#"><i class="fa-brands fa-twitter" style="padding-top: .3em;"></i></a></li>
            <li class="menu_item"><a href="#"><i class="fa-brands fa-instagram" style="padding-top: .3em;"></i></a></li>
        </ul>
    </nav>

    <!-- Aquí se encuentra el contenido principal de la página web. -->
    <div class="main">
        <div id="intro">
            <p>Bienvenido/a a <b>"Genshin Ascension Cards"</b></p>
            <p>Aquí encontrarás información sobre los materiales necesarios para ascender a tus personajes de </p>
            <p>“Genshin Impact”. Selecciona un personaje para ver su ficha y poder descargarla.</p>
        </div>

        <!--En este contenedor, se encuentra lo necesario para generar las tarjetas de perfil de los personajes. Enlazando las páginas de php correspondientes y 
        utilizando un bucle "foreach" para generar una tarjeta para cada personaje de la BBDD. -->
        <div class="characters">
            <?php
                require_once 'db/connection.php';
                include 'pages/select.php';
                include 'pages/selectPersonajes.php';

                /* Aquí se usa la variable "$ids" obtenida de la página "select.php" para obtener los datos de la BBDD. */
                foreach($ids as $id){
                    echo '<div class="perfiles" data-value="'.$id["id"].'">';
                    echo '<img src="'.$id["imgPerfil"].'" alt="">';
                    echo '<p>'.$id["nombre"].'</p>';
                echo '</div>';
                }
            ?>
        </div>
        <!--Aquí se encuentra el div que contendrá las tarjetas generadas al seleccionar cada personaje.-->       
        <div class="card"></div>
        <!-- Este botón nos permitirá descargar la imagen generada. Contiene un icono de descarga. -->
        <button id="crearImagen"><i class="fa-solid fa-download"></i>Descargar</button>
    </div>
    
    <!-- Enlace a nuestro archivo de "html2canvas" que nos permite convertir un contenedor en una imagen. -->
    <script src="html2canvas.js"></script>
    <!-- Enlace a nuestro archivo de "filesaver", plugin que nos permite descargar de forma automática la imagen al pulsar el botón. -->
    <script src="filesaver.js"></script>
    <!-- Enlace a nuestro archivo de jquery, donde están las funciones necesarias para el funcionamiento de la aplicación. -->
    <script src="script.js"></script>
</body>
</html>

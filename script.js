$( document ).ready(function() {
    
    /* MENÚ HAMBURGUESA */

    //Primero seleccionamos el contenedor con el id "burger_menu" y creamos una función que se ejecutará al hacer clic sobre él.
    $("#burger_menu").click(function(){

        //Estas líneas son referentes a la animación de las barras, añade las clases CSS en las que se modifican tanto la rotación como la opacidad
        $("#burger_menu>span:nth-child(1)").toggleClass("primera");
        $("#burger_menu>span:nth-child(2)").toggleClass("segunda");
        $("#burger_menu>span:nth-child(3)").toggleClass("tercera");

        /*Se usa la función "stop()" para evitar que se genere una cola de acciones al hacer varios clics de forma rápida. Al aparecer el menú en móvil, le añadimos la clase
        CSS "show"*/
        $(".menu_items").stop();
        $(".menu_items").toggleClass("show");
    });

    /*GENERAR IMAGEN*/

    //Esta función nos permite seleccionar el contenedor con el id "crearImagen" y al hacer click ejecutará una función para convertir un contenedor en una imagen.
    $("#crearImagen").click(function(){
        
        /*En esta línea, asignamos el valor que tiene el botón a una variable, para poder usarla más adelante.*/
        var nombreTarjeta = $("#crearImagen").val()
        //Aquí llamamos al html2canvas para convertir el contenedor con la clase "card" para que haga una "captura" del mismo.
        html2canvas($(".card")[0]).then((canvas) => {
            
            //Aquí llamamos al plugin "filesaver" para poder descargar la imagen y almacenarla en nuestro dispositivo.
            canvas.toBlob(function(blob){
            /*Al generar el archivo, usamos la variable creada enteriormente para crear una imagen con el nombre del personaje.*/    
            saveAs(blob, 'ficha '+nombreTarjeta+'.png')
        })
        });
    })

    /*AJAX*/

    //Seleccionamos el contenedor con la case "item" y al hacer clic, ejecutará una función.
    $(".perfiles").on('click', function(e){   
        //Aquí creamos la variable "cartaPersonaje y le asignamos el valor del contenedor seleccionado (los valores corresponden a las ids de los personajes de la BBDD)."
        var cartaPersonaje = $(this).data('value');
        //Aquí hacemos que el contenedor de la tarjeta tenga una animación en la que la opacidad pasa a 0.
        $('.card').animate({'opacity':'0.0'}, 1000, function (){

            //Utilizamos ajax para evitar que todo el proceso requiera de recargar la página.
            $.ajax({
                /*Utilizamos los datos del "selectPersonajes"*/ 
                method : 'POST',
                dataType: 'json',
                url : 'pages/selectPersonajes.php',
                data : {
                    'cartaPersonaje' : cartaPersonaje
                },

                //Si lo anterior tiene éxito, traducirá los datos para convertirlos en un objeto que se pueda usar con jquery.
                success:function(data){
                    console.log(data)
                     //A los datos, les aplicamos un bucle forEach para generar una tarjeta para cada personaje seleccionado.
                     data.forEach(element => {
                        //Ya que cada elemento de cada personaje tiene un color distinto, usamos de fondo una imagen distinta según el asignado en la BBDD.
                        $('.card').css({'background-image':'url('+element.imgElem+')'})
                        /*Asignamos al botón, el valor del nombre del personaje para poder usarlo más adelante.*/
                        $('#crearImagen').val(element.nombrePJ)
                        //Aquí modificamos el contenido del contenedor "card" y le añadimos todo el contenido de los personajes a la tarjeta.
                        $(".card").html(
                            '<div class="profile">'+
                                '<img src="'+element.imgSplash+'" alt="">'+
                                '<p>'+ element.nombrePJ+'</p>'+
                                '</div>'+
                                '<div class="materials">'+
                                    '<div class="level">'+
                                        '<p>Materiales de subida de nivel</p>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item1+'" alt="">'+
                                            '<p>x'+element.i1Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item2+'" alt="">'+
                                            '<p>x'+element.i2Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item3+'" alt="">'+
                                            '<p>x'+element.i3Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item4+'" alt="">'+
                                            '<p>x'+element.i4Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item5+'" alt="">'+
                                            '<p>x'+element.i5Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item6+'" alt="">'+
                                            '<p>x'+element.i6Cant+'</p>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="talent">'+
                                        '<p>Materiales de Talentos</p>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item10+'" alt="">'+
                                            '<p>x'+element.i10Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item11+'" alt="">'+
                                            '<p>x'+element.i11Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item12+'" alt="">'+
                                            '<p>x'+element.i12Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item13+'" alt="">'+
                                            '<p>x'+element.i13Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item14+'" alt="">'+
                                            '<p>x'+element.i14Cant+'</p>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="mixed">'+
                                        '<p>Materiales Mixtos</p>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item7+'" alt="">'+
                                            '<p>x'+element.i7Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item8+'" alt="">'+
                                            '<p>x'+element.i8Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item9+'" alt="">'+
                                            '<p>x'+element.i9Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item15+'" alt="">'+
                                            '<p>x'+element.i15Cant+'</p>'+
                                        '</div>'+
                                        '<div class="item">'+
                                            '<img src="'+element.item16+'" alt="">'+
                                            '<p>x'+element.i16Cant+'</p>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'
                        )
                        //La tarjeta, en un inicio oculta, pasará a ser flex-box para aparecer.
                        $('.card').css({'display':'flex'})
                        //Tendrá además una animación de aparición al cambiar su opacidad a 1.
                        $('.card').animate({'opacity':'1.0'}, 1000);
                        //El botón "crearImagen" pasará también a ser flex-box, apareciendo solo cuando aparezca la tarjeta.
                        $('#crearImagen').css({'display':'flex'})
                        /*Estas líneas generan una pequeña animación de desplazamiento hacia la tarjeta generada al pulsar en algún personaje.*/
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $(".card").offset().top
                        }, 100);
                    })
                },
                /*En caso de que la recuperación de datos con AJAX falle, con estas líneas podemos conocer el motivo del error.*/
                error: function(response) {
                console.log(response);
                }
            }); 

        });
        
    });

});

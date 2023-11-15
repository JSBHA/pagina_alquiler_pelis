<?php
include 'model/conexion.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/stylos.css">

    <title>Pelis</title>
</head>

<body>



    <!----titulo y barra de navegacion-->
    <header>
        <div class="contenedor">
            <a href="index.php" class="link-sin-resalte">
                <h2 class="logotipo">Pelis</h2>
            </a>
            <nav>
                <a href="#" class="activo">Inicio</a>
                <a href="login/login.php">Login</a>
                <a href="#">Peliculas</a>
                <a href="#">Mas Recientes</a>
                <a href="#">Mis lista</a>

            </nav>
        </div>
    </header>

    <!------------carousel------------->
    <main>
        <div class="peli-principal">
            <div class="contenedor">
                <h3 class="titulo">Avatar: El sentido del agua</h3>
                <p class="descripcion">Ambientada más de una década después de los acontecimientos de la primera
                    película, 'Avatar: The Way of Water' empieza contando la historia de la familia Sully (Jake, Neytiri
                    y sus hijos), los problemas que los persiguen, lo que tienen que hacer para mantenerse a salvo, las
                    batallas que libran para seguir con vida y las tragedias que sufren..</p>
                <button role="button" class="boton" class="boton-item"><i
                        class="fa-solid fa-cart-shopping"></i>Alquilar</button>
                <button role="button" class="boton" class="boton-item"><i class="fa-solid fa-circle-info"></i>Mas
                    informacion</button>
            </div>
        </div>

        <div class="peliculas-recomendadas contenedor">
            <div class="contenedor-titulos-controles">
                <h3>Pelis Recomendadas</h3>
                <div class="indicadores">

                </div>
            </div>

            <div class="contenedor-principal">
                <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i
                        class="fa-solid fa-angle-left"></i></button>

                <div class="contenedor-carousel">
                    <div class="carousel">
                        <div class="pelicula">
                            <img src="img/1_1.jpg " title="OPPENHEIMER" alt="OPPENHEIMER" data-bs-toggle="popover"
                                data-bs-trigger="hover"
                                data-bs-conten="Película sobre el físico J. Robert Oppenheimer y su papel como desarrollador de la bomba atómica. Basada en el libro 'American Prometheus: The Triumph and Tragedy of J. Robert Oppenheimer' de Kai Bird y Martin J. Sherwin."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/2_2.jpg"
                                    title="TRANSFORMERS" 
                                    alt="TRANSFORMERS" 
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-conten="Cuando surge una nueva amenaza capaz de destruir todo el planeta, Optimus Prime y los Autobots deben unirse a una poderosa facción conocida como los Maximals. Con el destino de la humanidad en juego, los humanos Noah y Elena harán lo que sea necesario para ayudar a los Transformers mientras se involucran en la batalla final para salvar la Tierra.""></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/3_3.jpg"
                                    title="BLACK CLOVER"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-conten="En un mundo donde la magia lo es todo, Asta, un niño que nació sin magia, aspira a convertirse en el Rey Mago, para superar la adversidad, demostrar su poder y mantener el juramento con sus amigos."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/4_4.jpg"
                                title="MORTAL KOMBAT"
                                data-bs-toggle="popover"
                                data-bs-trigger="hover"
                                data-bs-conten="Basado en el popular videojuego creado por Ed Boon y John Tovias, Mortal Kombat Legends: Scorpion’s Revenge pone el foco en un torneo único que se celebra una vez por generación y en el que se enfrentan los campeones de distintos reinos. El ganador determinará el destino de la Tierra y de sus habitantes."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/5_5.jpg"
                                title="John Wick"
                                data-bs-toggle="popover"
                                data-bs-trigger="hover"
                                data-bs-content="John Wick descubre un camino para derrotar a la Alta Mesa. Pero para poder ganar su libertad, Wick deberá enfrentarse a un nuevo rival con poderosas alianzas en todo el mundo, capaz de convertir a viejos amigos en enemigos."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/6_6.jpg"
                                title="Avatar"
                                data-bs-toggle="popover"
                                data-bs-trigger="hover"
                                data-bs-content="Ambientada más de una década después de los acontecimientos de la primera película, 'Avatar: The Way of Water' empieza contando la historia de la familia Sully (Jake, Neytiri y sus hijos), los problemas que los persiguen, lo que tienen que hacer para mantenerse a salvo, las batallas que libran para seguir con vida y las tragedias que sufren."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/7_7.jpg"
                                    title="El Maestro de las Sombras"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Después de ser asesinado por un grupo de criminales, un hombre renace con superpoderes similares a los de los animales y tiene como misión corregir los errores de su ciudad."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/8_8.jpg"
                                    title="El Gato con Botas"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="El Gato con Botas se embarca en un viaje épico para encontrar al mítico Último Deseo y recuperar sus nueve vidas."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/9_9.jpg"
                                    title="Flash"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Barry altera inadvertidamente el futuro cuando utiliza sus superpoderes para viajar en el tiempo con el fin de cambiar los acontecimientos del pasado y queda atrapado en una realidad en la que el General Zod ha regresado y no hay superhéroes a los que recurrir. Para salvar el mundo en el que se encuentra y volver al futuro que conoce, la única esperanza de Barry es correr por su vida. Pero, ¿bastará con llevar a cabo el sacrificio definitivo para reiniciar el universo?"></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/10_10.jpg"
                                    title="El Exorcista del Vaticano"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Película sobre Gabriele Amorth, un sacerdote que ejerció como exorcista principal del Vaticano, realizando más de cien mil exorcismos a lo largo de su vida. Amorth escribió dos libros de memorias donde detalló sus experiencias luchando contra Satanás"></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/11_11.jpg"
                                    title="FAST & FURIOUS X"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Durante numerosas misiones más que imposibles, Dom Toretto y su familia han sido capaces de ser más listos, de tener más valor y de ir más rápido que cualquier enemigo que se cruzara con ellos. Pero ahora tendrán que enfrentarse al oponente más letal que jamás hayan conocido: Un terrible peligro que resurge del pasado, que se mueve por una sangrienta sed de venganza y que está dispuesto a destrozar a la familia y destruir para siempre todo lo que a Dom le importa."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/12_12.jpg"
                                    title="Misión imposible"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Ethan Hunt y su equipo del FMI, se embarcan en su misión más peligrosa hasta la fecha: localizar, antes de que caiga en las manos equivocadas, una nueva y terrorífica arma que amenaza a toda la humanidad. En esta tesitura, y con unas fuerzas oscuras del pasado de Ethan acechando, comienza una carrera mortal alrededor del mundo en la que está en juego el control del futuro y el destino del planeta. Enfrentado a un enemigo misterioso y todopoderoso, Ethan se ve obligado a considerar que nada puede anteponerse a su misión, ni siquiera las vidas de aquellos que más le importan."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/13_13.jpg"
                                    title="Sisu "
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="En lo profundo de la naturaleza salvaje de Laponia, Aatami Korpi está buscando oro, pero después de tropezar con una patrulla nazi, comienza una persecución impresionante y hambrienta de oro a través de la naturaleza salvaje de Laponia destruida y minada."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/14_14.jpg"
                                    title="INSIDIOUS "
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="En esta nueva película de terror original, en la que veremos de nuevo a Lin Shaye como la Doctora Elise Rainier, la brillante parapsicóloga se enfrenta a su más personal y aterradora caza hasta la fecha, que sucede en su antigua casa familiar. Notas de producción - Cuarta entrega de la saga"></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/15_15.jpg"
                                    title="Extinción "
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Cuando una enfermedad desconocida acaba con la mayor parte de la población mundial, se aísla a un hombre con una sangre única para estudiarlo. Temiendo por la seguridad de su esposa, rompe la cuarentena y se adentra en un mundo invadido por monstruosos infectados y una agencia sombría que los persigue."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/16_16.jpg"
                                title="INSIDIOUS II"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Para enterrar sus demonios de una vez por todas, Josh Lambert y un ya universitario Dalton Lambert, deberán profundizar en El Mas Allá (The Further) más que nunca, enfrentándose al oscuro pasado familiar y a un huésped de nuevos horrores terroríficos que acechan tras la puerta roja."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/17_17.jpg"
                                    title="Warhorse One"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Mientras realizaba una misión de rescate para evacuar a un grupo de misioneros, durante la retirada militar de EE. UU. de Afganistán en 2021, un helicóptero del equipo SEAL es derribado por un grupo de insurgentes. Uno de los operadores del equipo SEAL, el Jefe Maestro Richard Mirko (Johnny Strong), es arrojado de los escombros, sobreviviendo milagrosamente al accidente. Con el resto de su equipo muerto en acción, Mirko continúa su búsqueda de los misioneros, pero encuentra su vehículo emboscado, el único sobreviviente: un traumatizado niño de 5 años. Mirko debe ahora guía al niño a un lugar seguro, a través de un guante de insurgentes hostiles, y sobrevive a la brutal naturaleza afgana."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/18_18.jpg"
                                    title="Spider-Man: Cruzando el Multiverso"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Miles Morales regresa para una aventura épica que transportará al amigable vecino de Brooklyn Spider-Man a través del Multiverso para unir fuerzas con Gwen Stacy y un nuevo equipo de Spider-People, y enfrentarse así a un villano mucho más poderoso que cualquier cosa que hayan conocido antes."></a>
                        </div>
                        <div class="pelicula">
                            <a href="#">
                                <img src="img/19_19.jpg"
                                    title="BARBIE"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="Barbie lleva una vida ideal en Barbieland, allí todo es perfecto, con chupifiestas llenas de música y color, y todos los días son el mejor día. Claro que Barbie se hace algunas preguntas, cuestiones bastante incómodas que no encajan con el mundo idílico en el que ella y las demás Barbies viven. Cuando Barbie se dé cuenta de que es capaz de apoyar los talones en el suelo, y tener los pies planos, decidirá calzarse unos zapatos sin tacones y viajar hasta el mundo real."></a>
                        </div>

                        <div class="pelicula">
                            <a href="#">
                                <img src="img/20_20.jpg"
                                    title="GUARDIANES DE LA GALAXIA"
                                    data-bs-toggle="popover"
                                    data-bs-trigger="hover"
                                    data-bs-content="La querida banda de los Guardianes se instala en Knowhere. Pero sus vidas no tardan en verse alteradas por los ecos del turbulento pasado de Rocket. Peter Quill, aún conmocionado por la pérdida de Gamora, debe reunir a su equipo en una peligrosa misión para salvar la vida de Rocket, una misión que, si no se completa con éxito, podría muy posiblemente conducir al final de los Guardianes tal y como los conocemos."></a>
                        </div>

                    </div>
                </div>
                <button role="button" id="flecha-derecha" class="flecha-derecha"><i
                        class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </main>

    <!----contenedor de elemtos-->



    <section class="contenedor-items-principal">
        <div class="contenedor-items">

            <?php
            $sentecia = $conection->prepare("SELECT * FROM `alquiler`");
            $sentecia->execute();
            $listaProductos = $sentecia->fetchAll(PDO::FETCH_ASSOC);

            /*print_r($listaProductos);*/
            ?>

            <?php foreach ($listaProductos as $alquiler) { ?>
                <div class="item">
                    <span class="titulo-item">
                        <?php echo $alquiler['nombre'] ?>
                    </span>
                    <img title="<?php echo $alquiler['nombre'] ?>" src="<?php echo $alquiler['imagen'] ?>"
                        alt="<?php echo $alquiler['nombre'] ?>" width="240px" class="img-item" data-bs-toggle="popover"
                        data-bs-trigger="hover" data-bs-content="<?php echo $alquiler['descripcion'] ?>">
                    <span class="precio-item">
                        <?php echo $alquiler['precio'] ?>
                    </span>
                    <button class="boton-item" name="btnAccion" value="Agregar" type="submit">Agregar al Carrito</button>
                </div>
            <?php } ?>

            <div class="item">
                <span class="titulo-item"></span>
                <img src="" alt="" width="240px" class="img-item">
                <span class="precio-item"></span>
            </div>
        </div>

        <!-------cart shop---------->

        <div class="cart">
            <div class="header-cart">
                <strong>
                    <h3>Tu carrito</h3>
                </strong>
            </div>

            <div class="cart-items">
                <!----------------- PENDIENTE POR VALIDAR PARA LA COMPRAS ----------------------->
                <div class="cart-item">
                    <!-- <img src="img/1-1.jpg" alt="" width="80px">
                    <div class="cart-item-detalles">
                        <span class="cart-item-titulo">OPPENHEIMER</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="cart-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="cart-item-precio">$12.000</span>
                    </div>
                    <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                    </span> -->
                </div>

                <!--  
                <div class="cart-item">
                    <img src="img/2.jpg" alt="" width="80px">
                    <div class="cart-item-detalles">
                        <span class="cart-item-titulo">Transformers</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="2" class="cart-item-cantidad" disabled > 
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="cart-item-precio">$12.000</span>
                    </div>
                    <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                    </span>
                </div>
-->
            </div>
            <div class="cart-total">
                <div class="fila">
                    <strong>Total</strong>
                    <span class="cart-precio-total">
                        $0
                    </span>
                </div>
                <button class="btn-pagar"><i class="fa-solid fa-bag-shopping"></i>
                    <h4>Pagar</h4>
                </button>
            </div>

        </div>
    </section>





    <script src="https://kit.fontawesome.com/72fa1e208f.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>


</body>

</html>
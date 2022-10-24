<?php
     include_once('conexion_PDO.php');
     //Consulta sql traer datos
       $consulta = 'SELECT * FROM tbl_form';
       $sql_query = $conn->prepare($consulta);
       $sql_query -> execute();
       //Arreglo para iterar un array
       $convert_fetch = $sql_query->fetchAll();
       //Mostrar array con la consulta
       //var_dump($convert_fetch);
     //Consulta para insertar datos
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LETRA -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,300&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="Css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title> Libreria </title>
</head>

<body>
    <!-- <div class="contenedor"> -->

    <header class="header" id="inicio">
        <img src="Img/hamburguesa.svg" alt="" class="hamburguer">
        <nav class="menu-navegacion">
            <a href="#inicio">Inicio</a>
            <a href="#servicio">Servicios</a>
            <a href="#nuestrabiblioteca">Nuestra Biblioteca</a>
            <a href="#librosnuevos"> Libros Nuevos </a>
            <a href="#contacto">Contacto</a>
            <!-- <a href="">Contacto</a>-->



        </nav>
        <div class="contenedor head">
            <h1 class="titulo">THE GOLDEN BOOK</h1>
            <p class="copy"> De los diversos instrumentos del hombre, el más asombroso es, sin duda, el libro.
                Los demás son extensiones de su cuerpo. El microscopio, el telescopio, son extensiones
                de su vista; el teléfono es extensión de la voz; luego tenemos el arado y la espada,
                extensiones de su brazo. Pero el libro es otra cosa: el libro es una extensión de la
                memoria y de la imaginación.</p>
        </div>
    </header>

    <main>
        <!-- GALERIA DE IMAGENES -->

        <section class="services contenedor" id="servicio">

            <h2 class="subtitulo">Nuestros Servicios</h2>
            <div class="contenedor-servicio">
                <img src="Img/Achievement _Flatline.svg">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span> Servicio de información </h3>
                        <p>Atención personalizada, información, asesoramiento general y local,
                            bases de datos en línea y catálogos de otras bibliotecas. </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Servicio de préstamo</h3>
                        <p>Préstamo gratuito de documentos, préstamo interbibliotecario,
                            préstamo especial para entidades y buzón 24 horas de devolución de documentos. </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> Formación </h3>
                        <p>Visitas guiadas para niños y adultos, sesiones formativas sobre el uso y
                            los recursos de la Biblioteca, especialmente en los centros de enseñanza,
                            formación en tecnologías de la información y la comunicación,
                            apoyo al autoaprendizaje, apoyo a la enseñanza reglada.
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">4</span>Acceso a Internet </h3>
                        <p>Acceso gratuito a Internet y zona Wi-Fi en nuestras sedes.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="gallery" id="nuestrabiblioteca">
            <div class="contenedor">
                <h2 class="subtitulo"> Nuestra Biblioteca </h2>
                <div class="contenedor-galeria">
                    <img src="Img/pexels-yan-krukov-8199762.jpg" class="img-galeria">
                    <img src="Img/pexels-element-digital-1370296.jpg" class="img-galeria">
                    <img src="Img/pexels-yan-krukov-8199705.jpg" class="img-galeria">
                    <img src="Img/pexels-element-digital-1370291.jpg" class="img-galeria">
                    <img src="Img/pexels-erika-quirino-3431444.jpg" class="img-galeria">
                    <img src="Img/pexels-polina-zimmerman-3747468.jpg" class="img-galeria">
                </div>
            </div>
        </section>


        <!-- EFECTO DE LA IMAGEN -->

        <section class="imagen-light">
            <img src="Img/close.svg" class="close">
            <img src="Img/home-img.jpg" class="agregar-imagen">
        </section>

        <!-- EXPERTOS -->
        <section class="contenedor" id="librosnuevos">
            <h2 class="subtitulo">Libros Nuevos:</h2>
            <section class="books">
                <div class="cont-book">
                    <img src="Img/Caratula1.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula2.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula3.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula4.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula5.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula6.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula7.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula8.svg">
                </div>
                <div class="cont-book">
                    <img src="Img/Caratula9.svg">
                </div>
            </section>
        </section>
    </main>

    <section class="contact">
        <div class="contact__image-wrapper">
            <img src="/Img/image_form.jpg" alt="" class="contact__image">
        </div>
        <div class="contact__right-side">
            <h1 class="contact__title"> Contacto</h1>
            <form class="contact__form-wrapper" action='formulario_contacto.php' method='POST'>
                <!-- action='./controladores/formulario_contacto.php' -->
                <div class="contact__input-line">
                    <label class="contact__label"> Nombre </label>
                    <input type="text" name="name_user" id="nombre" class="contact__input">
                </div>
                <div class="contact__input-line">
                    <label class="contact__label">Telefono</label>
                    <input type="number" name="phone_user" id="telefono" class="contact__input">
                </div>
                <div class="contact__input-line">
                    <label class="contact__label">Email</label>
                    <input type="email" name="email_user" id="email" class="contact__input">
                </div>

                <div class="contact__input-line">
                    <label class="contact__label"> Información </label>
                    <input type="text" name="informacion_user" id="informacion class="
                        contact__input--textarea"></input>
                </div>
                <input type="submit" value="Enviar" class="contact__submit-button">

            </form>
        </div>
    </section>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"> Nombre </th>
                <th scope="col"> Telefono</th>
                <th scope="col"> Correo </th>
                <th scope="col"> Información </th>
                <th scope="col"> Acción </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($convert_fetch as $datos) { ?>
            <tr>
                <td>
                    <?php echo $datos['nombre_user']?>
                </td>
                <td>
                    <?php echo $datos['telefono_user']?>
                </td>
                <td>
                    <?php echo $datos['email_user']?>
                </td>
                <td>
                    <?php echo $datos['informacion_user']?>
                </td>
                <td><a href="eliminar.php?id=<?php echo $datos['id_users']?>" class="btn btn-danger" >Eliminar</a> 
                    <a href="editar.php?id=<?php echo $datos['id_users']?>"  class="btn btn-warning">Editar</a>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <footer id="contacto">
        <div class="footer-content">
            <h3> THE GOLDEN BOOK </h3>
            <ul class="social-media">
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-linkedin-square'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class='bx bxl-gmail'></i></a></li>
            </ul>
        </div>


    </footer>

    <script src="Js/menu.js"></script>
    <script src="Js/lightbox.js"></script>

</body>

</html>
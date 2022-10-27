<?php
     include_once("conexion_PDO.php");
     if (isset($_GET)){
     $id = $_GET['id'];
     $query = 'SELECT * FROM tbl_form WHERE id_users = ?';
     $query_prepare = $conn->prepare($query);
     $query_prepare -> execute(array($id)); 
     $seacher = $query_prepare->fetchAll();
     //Mostrar array con la consulta
     
   }
   
?>
<?php
    include_once("conexion_PDO.php"); 
    if (isset($_GET)) {
        $id = $_GET['id'];
        echo $_REQUEST['nombre_user'];
        $nombre = $_GET['nombre_user'];
        echo "nombre_user",$nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LETRA -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,300&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="Css/editar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title> Editar información </title>
</head>

<body>
    <section class="contact">
        <div class="contact__image-wrapper">
            <img src="/Img/image_form.jpg" alt="" class="contact__image">
        </div>
        <div class="contact__right-side">
            <h1 class="contact__title"> Contacto</h1>
            <form class="contact__form-wrapper" action="editar.php?id=<?php echo $datos['id_users']?>" method="GET">
                <!-- action='./controladores/formulario_contacto.php' -->
                <?php foreach($seacher as $datos_update) { ?>
                <div class="contact__input-line">
                    <label class="contact__label"> Nombre </label>
                    <input type="text" name="name_user" id="nombre" class="contact__input" value="<?php echo $datos_update[0]['name_user']?>
                </div>
                <div class="contact__input-line">
                    <label class="contact__label">Telefono</label>
                    <input type="text" name="phone_user" id="telefono" class="contact__input" value=<?php echo
                        $datos_update['telefono_user']?>>
                </div>
                <div class="contact__input-line">
                    <label class="contact__label">Email</label>
                    <input type="email" name="email_user" id="email" class="contact__input" value=<?php echo
                        $datos_update['email_user']?>>
                </div>

                <div class="contact__input-line">
                    <label class="contact__label"> Información </label>
                    <input type="text" name="informacion_user" id="informacion class=" contact__input--textarea"
                        value=<?php echo $datos_update['informacion_user']?>></input>
                </div>
                <input type="submit" value="Actualizar" class="contact__submit-button">
                <?php } ?>
            </form>
        </div>
    </section>
</body>
</html>
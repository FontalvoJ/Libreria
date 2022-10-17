<?php
    include_once("conexion_PDO.php");
    if (isset($_GET)){
    $id = $_GET['id'];
    $query = 'SELECT * FROM tbl_form WHERE id_users = ?';
    $query_prepare = $conn->prepare($query);
    $query_prepare -> execute(array($id));    
    $seacher = $query_prepare->fetchAll();  
   
    //Mostrar array con la consulta
    //var_dump($seacher);
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDITAR</title>
</head>
<body>
<section class="contact">
        <div class="contact__image-wrapper">
            <img src="/Img/image_form.jpg" alt="" class="contact__image">
        </div>
        <div class="contact__right-side">
            <h1 class="contact__title"> Contacto</h1>
            <form class="contact__form-wrapper"  action='' method=''>  <!-- action='./controladores/formulario_contacto.php' -->
           
            <?php foreach($convert_fetch as $datos_update) { ?>

            <div class="contact__input-line">
                    <label class="contact__label"> Nombre </label>
                    <input type="text" name="name_user" id="nombre" value=<?php echo $datos_update['nombre_user']?> class="contact__input">
                </div>
                <div class="contact__input-line">
                    <label class="contact__label">Telefono</label>
                    <input type="number" name="phone_user" id="telefono" value= <?php echo $datos_update['telefono_user']?> class="contact__input">
                </div>
                <div class="contact__input-line">
                    <label class="contact__label">Email</label>
                    <input type="email" name="email_user" id="email" value= <?php echo $datos_update['email_user']?> class="contact__input">
                </div>

                <div class="contact__input-line">
                    <label  class="contact__label"> Información </label>
                    <input type="text" name="informacion_user" id="informacion value= <?php echo $datos_update['informacion_user']?> class="contact__input--textarea"></input>
                </div>
                <input type="submit" value="Actualizar" class="contact__submit-button">
                
            </form>
        </div>
    </section>   
</body>
</html>
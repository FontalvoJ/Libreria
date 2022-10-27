<?php 
    include_once('conexion_PDO.php');
    if (isset($_POST)){
    $nombre = $_POST['name_user'];
    $telefono = $_POST ['phone_user'];
    $correo = $_POST ['email_user'];
    $informacion = $_POST ['informacion_user'];

    $insert_query = 'INSERT INTO tbl_form (nombre_user,telefono_user,email_user,informacion_user) 
    VALUES(?,?,?,?)';
    $insert_prepare = $conn->prepare($insert_query);
    $insert_prepare -> execute(array($nombre,$telefono,$correo,$informacion));      
    echo "<script>alert('Datos Guardados');</script>";
    header('Location:index.php');
    }else {
    echo "Error al ingresar los datos";
    }
?>


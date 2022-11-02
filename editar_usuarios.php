<?php
    include_once('conexion_PDO.php');
    if (isset($_POST)) {   
        $id = $_POST['id']; 
        $nombre = $_POST['nombre'];
        $apellido = $_POST ['apellido'];
        $cedula = $_POST ['cedula'];
        $correo = $_POST ['correo'];
        $pass = $_POST['contrasena'];


     $query = 'UPDATE tbl_users SET nombre_user=?, apellido_user=?,cedula_user=?,email_user=?, pass_user=? WHERE id_users=?';
     $query_prepare = $conn->prepare($query);
     $query_prepare -> execute(array($nombre,$apellido,$cedula,$correo,$pass,$id)); 
     header('Location:listar_usuarios.php');
    }else {
        echo "<script>alert('Error actualizando los datos');</script>";
    }
?>
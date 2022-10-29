<?php 
      include_once("conexion_PDO.php");
      if (isset($_POST)){
      $nombre = $_POST['nombre'];
      echo "data = ", $nombre;
      $apellido = $_POST ['apellido'];
      $cedula = $_POST ['cedula'];
      $correo = $_POST ['correo'];
      $pass = $_POST ['contrasena'];
     

      $insert_query = 'INSERT INTO tbl_users(nombre_user,apellido_user,cedula_user,email_user,pass_user) 
      VALUES(?,?,?,?,?)';
      $insert_prepare = $conn->prepare($insert_query);
      $insert_prepare -> execute(array($nombre,$apellido,$cedula,$correo,$pass));      
      header('Location:formulario_sesion.php');
    }else {
      echo "Error al ingresar los datos";
    }
    ?>
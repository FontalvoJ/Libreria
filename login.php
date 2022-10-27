<?php
      include_once('conexion_PDO.php');
      //Consulta sql traer datos
        if (isset($_POST)) {
            $correo = $_POST['email'];
            echo $correo;
            $contrasena = $_POST['contrasena'];
            echo $contrasena;
        
        $consulta = 'SELECT * FROM tbl_users where email_user = ? AND pass_user = ?';
        $sql_query = $conn->prepare($consulta);
        $sql_query -> execute(array($correo, $contrasena));
        //Arreglo para iterar un array
        $convert_fetch = $sql_query->fetchAll();
        //Mostrar array con la consulta
        var_dump($convert_fetch);
        //Consulta para insertar datos
        }

        foreach($convert_fetch as $datos) { 
        
        if ($datos['email_user'] == $correo && $datos['pass_user'] ==$contrasena ) {
            header('Location:index.php');
        } else {
            echo "<script>alert('Correo y/o contraseñas incorrectas');</script>";
        }
                
        }
?>
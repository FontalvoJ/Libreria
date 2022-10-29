<?php
    include_once("conexion_PDO.php");
    if (isset($_GET)){
    $id = $_GET['id'];
    $delete_query = 'DELETE FROM tbl_users WHERE id_users = ?';
    $delete_prepare = $conn->prepare($delete_query);
    $delete_prepare -> execute(array($id));      
    echo "<script>alert('Datos eliminados correctamente');</script>";
    header('Location: listar_usuarios.php');
  }else {
    echo "Error al eliminar los datos";
  }
?>
<!DOCTYPE html>
<html lang="en">
<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/table.css">
</head>
<?php
include_once('conexion_PDO.php');
//Consulta sql traer datos
$consulta = 'SELECT * FROM tbl_form';
$sql_query = $conn->prepare($consulta);
$sql_query->execute();
//Arreglo para iterar un array
$convert_fetch = $sql_query->fetchAll();
//Mostrar array con la consulta
//var_dump($convert_fetch);
//Consulta para insertar datos

?>

<body>
<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
  <div class="container">
    
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2 active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="listar_usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="listar_contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">

                <div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Table</h4>
                            <p class="card-description">
                                The contacts register are:
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"> Id </th>
                                            <th scope="col"> Name </th>
                                            <th scope="col"> Phone</th>
                                            <th scope="col"> Email </th>
                                            <th scope="col"> Info</th>
                                            <th scope="col"> Delete </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($convert_fetch as $datos) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $datos['id_users'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $datos['nombre_user'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $datos['telefono_user'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $datos['email_user'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $datos['informacion_user'] ?>
                                                </td>
                                                <td><a href="eliminar_contacto.php?id=<?php echo $datos['id_users'] ?>" class="btn btn-danger"><i class='bx bxs-user-x'></i></a>
                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
</body>

</html>
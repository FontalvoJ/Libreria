<!DOCTYPE html>
<html lang="en">
<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
</head>
<?php
include_once('conexion_PDO.php');
//Consulta sql traer datos
$consulta = 'SELECT * FROM tbl_users';
$sql_query = $conn->prepare($consulta);
$sql_query->execute();
//Arreglo para iterar un array
$convert_fetch = $sql_query->fetchAll();
//Mostrar array con la consulta
//var_dump($convert_fetch);
//Consulta para insertar datos

?>

<body>
    <div class="container">
        <div class="title">
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Tabla de Usuarios</h3>
            </div>
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"> Nombre </th>
                <th scope="col"> Apellido</th>
                <th scope="col"> Cedula </th>
                <th scope="col"> Correo </th>
                <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($convert_fetch as $datos) { ?>
            <tr>
                <td>
                    <?php echo $datos['nombre_user']?>
                </td>
                <td>
                    <?php echo $datos['apellido_user']?>
                </td>
                <td>
                    <?php echo $datos['cedula_user']?>
                </td>
                <td>
                    <?php echo $datos['email_user']?>
                </td>
                <td><a href="eliminar.php?id=<?php echo $datos['id_users']?>" class="btn btn-danger" >Eliminar</a> 
                    <a href="editar.php?id=<?php echo $datos['id_users']?>"  class="btn btn-warning">Editar</a>
            </tr>
            <?php } ?>
        </tbody>
    </table>
                </div>


                <footer class="footer text-center ">
                    <p>Diseñado por José David Fontalvo Mejía</p>
                </footer>


                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>

</html>
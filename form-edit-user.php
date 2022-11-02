<?php
include_once("conexion_PDO.php");
if (isset($_GET)) {
    $id = $_GET['id'];
    $query = 'SELECT * FROM tbl_users WHERE id_users = ?';
    $query_prepare = $conn->prepare($query);
    $query_prepare->execute(array($id));
    $seacher = $query_prepare->fetchAll();
    //Mostrar array con la consulta

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrarse</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://images.pexels.com/photos/2553427/pexels-photo-2553427.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>

                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="editar_usuarios.php" method="POST">
                                        <?php foreach ($seacher as $datos_update) { ?>

                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                                <span class="h1 fw-bold mb-0"> The Golden Book</span>
                                            </div>
                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Actualizar datos</h5>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17" class="form-control form-control-lg" name="id" value="<?php echo $datos_update['id_users'] ?>" />
                                                <label class="form-label" for="form2Example17" required autofocus>Id</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17" class="form-control form-control-lg" name="nombre" value="<?php echo $datos_update['nombre_user'] ?>" />
                                                <label class="form-label" for="form2Example17" required autofocus>Nombre</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17" class="form-control form-control-lg" name="apellido" value="<?php echo $datos_update['apellido_user'] ?>" />
                                                <label class="form-label" for="form2Example17" required autofocus>Apellido</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17" class="form-control form-control-lg" name="cedula" value="<?php echo $datos_update['cedula_user'] ?>" />
                                                <label class="form-label" for="form2Example17" name="cedula_user" required autofocus>Cedula</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" class="form-control form-control-lg" name="correo" value="<?php echo $datos_update['email_user'] ?>" />
                                                <label class="form-label" for="form2Example17" required autofocus>Correo</label>
                                            </div>
                                            <div class="pt-1 mb-4"> <button type="submit" class="btn btn-dark btn-lg btn-block">Actualizar</button> </div>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>

    </section>
</body>

</html>
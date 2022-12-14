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
                  <form action="formulario_registro.php" method="POST">


                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0"> The Golden Book</span>
                    </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrate</h5>

                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" class="form-control form-control-lg" name="nombre" />
                      <label class="form-label" for="form2Example17" required autofocus>Nombre</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" class="form-control form-control-lg" name="apellido" />
                      <label class="form-label" for="form2Example17" required autofocus>Apellido</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example17" class="form-control form-control-lg" name="cedula" />
                      <label class="form-label" for="form2Example17" name="cedula_user" required autofocus>Cedula</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" name="correo" />
                      <label class="form-label" for="form2Example17" required autofocus>Correo</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" name="contrasena" />
                      <label class="form-label" for="form2Example27">Contrase??a</label>
                    </div>
                    <div class="pt-1 mb-4"> <button type="submit" class="btn btn-dark btn-lg btn-block">Registrar</button> </div>

                  </form>
                </div>
              </div>

  </section>
</body>

</html>
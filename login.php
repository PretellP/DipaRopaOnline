<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/columnas.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formIndex.css">
    <title>Document</title>
</head>
<body class="bg overflow-hidden">
  <div class="container col-12 si align-items-center" style="display: flex; min-height: 100vh;">
          <div class="col-1 d-none d-lg-block col-lg-6 col-xl-7 justify-content-center align-items-center" style="min-height: 100%;">
            <img src="images/logodipaHD.png" class="dipa" style="min-height: 100vh; width: auto">
          </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 vh-100 row justify-content-center align-items-center ">
          
            <div class="container-xl  vh-100  row justify-content-center align-items-center modal-body">
                  <form class="border-0 border-light p-5 bg-white " action="confirmarUsuario.php" method="post">
          
                    <h4 class="h4 mb-4 text-center">INGRESE A SU CUENTA</h4>

                  <div class="form-group">
                    <label for="txtCorreo">E-mail:</label>        
                    <!-- Email -->
                    <div class="wrapp-input">
                    <input type="email" id="txtCorreo" name="txtCorreo" class="form-control mb-4" placeholder="Ingrese su e-mail">
                    </div>
                  </div> 
                <div class="form-group">
                    <label for="txtClave"> Conraseña:</label>
                      <!-- Password -->
                    
                      <div class="wrapp-input">
                        <span class="icon-eye">
                            <i class="fas fa-eye-slash"></i>
                        </span>
                        <input type="password" id="txtClave" name="txtClave" class="form-control mb-4" placeholder="Ingrese su contraseña">
                      </div>
                  
                </div>
              
            
                  <!-- Sign in button -->
                  <button class="btn btn-info btn-block my-4 bg-dark" type="submit">Ingrese</button>
          
                <!-- Register -->
            
                <label>¿No está registrado?
                    <a href="register.php">Regístrese</a></label>
                
          
            
          
                  </form>
          
            
    
            </div>
      </div>
  </div>
  
<script src="js/main.js"></script>

</body>
</html>
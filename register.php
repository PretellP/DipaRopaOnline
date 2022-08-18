<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/formIndex.css">
    <link rel="stylesheet" href="css/columnas.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg overflow-hidden ">
  <div class="container col-12 vh-100 d-flex justify-content-center align-items-center">
  
    <div class="col col-l-6 col-xl-5 col-md-8 col-sm-9 text-white h6 d-flex justify-content-center ">
      <!---- CABECERA NUEVO USUARIO ---->
                  
            <form action="confirmarRegistro.php" method="post">
                
               
                
                  <!------ CONTENIDO NUEVO USUARIO ---->
             <div class="modal-body ">
               <h1 class="h5 font-weight-bold text-uppercase text-center">Datos Personales</h1>
                      <div class="form-group col-12 col-l-12 col-xl-12 col">
                        <label for="txtNmUs">Nombres:</label>
                        <div class="wrapp-input">
                            <input type="text" class="form-control" id="txtNmUs" name="txtNmUs" placeholder="Ingrese sus nombres"  required>
                        </div>
                      </div>
                       <div class="form-group col-12">
                                 <label for="txtApel">Apellidos:</label>
                            <div class="wrapp-input">
                              <input type="text" class="form-control" id="txtApel" name="txtApel" placeholder="Ingrese sus apellidos" required>
                             </div>
                       </div>

                    
                      <div class="form-group col-12">
                        <label for="">E-mail:</label>
                           <div class="wrapp-input">
                              <input type="email" class="form-control" id="txtCor" name="txtCor" placeholder="Ingrese su correo electrónico" required>
                           </div>
                      </div>
                      <div class="form-group col-12">
                        <label for="txtClave"> Contraseña:</label>
                        <!-- Password -->
                  
                         <div class="wrapp-input">
                            <span class="icon-eye">
                              <i class="fas fa-eye-slash"></i>
                            </span>
                            <input type="password" id="txtClave" name="txtClave" class="form-control mb-4" placeholder="Ingrese su contraseña" required>
                          </div>
                
                      </div>
                      <div class="form-group col-12 col-md-6 col-sm-6">
                        <label for="txtDir">Dirección:</label>
                        <div class="wrapp-input">
                           <input type="text" class="form-control" id="txtDir" name="txtDir" placeholder="Ingrese su dirección" required>
                        </div>
                      </div>
                     <div class="form-group col-12 col-md-6 col-sm-6">
                        <label for="txtCoP">Código Postal:</label>
                        <div class="wrapp-input">
                           <input type="text" class="form-control" id="txtCoP" name="txtCoP" placeholder="Ingrese su código postal" required>
                        </div>
                     </div>
                    <div class="form-group col-12 col-md-6 col-sm-6">
                        <label for="txtCel">Celular:</label>
                        <div class="wrapp-input">
                        <input type="tel" class="form-control" id="txtCel" name="txtCel" placeholder="Ingrese su número" required >
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 col-sm-6 ">
                      <label for="txtDni">DNI:</label>
                      <div class="wrapp-input">
                          <input type="text" class="form-control" id="txtDni" name="txtDni" placeholder="Ingrese su DNI" required >
                      </div>
                    </div>
             </div>
                  <!---- MODAL FOOTER --->
                  <div class="modal-footer col-12 ">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checked"  required>
                      <label class="custom-control-label" for="checked"> <a href=""> Acepta los términos y condiciones </a></label>
                    </div>
                      <button type="submit" class="btn btn-warning text-white" name="btnSave"><i class="fas fa-check"> Registrarse</i></button>
                      
                  </div>
            </form>
        
   </div>
    
  </div>
   <script src="js/main.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="Assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="Assets/css/style.css">

    <title>Control-AID</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('Assets/images/bg_3.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5">
            <div class="form-block">
              <div class="text-center mb-3">
               <img src="Vista/vendors/images/Control-AIDlogin.png" alt="Descripción de la imagen" style=" height: 70px;">
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="Controlador/loginController.php" method="POST">
                <div class="form-group first">
                  <label for="username">Usuario</label>
                  <input type="text" class="form-control" name="username" placeholder="" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" name="pass" placeholder="" id="password">
                </div>
                
                <div class="d-sm-flex mb-3 align-items-center">
                  <!-- <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label> -->
                  <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  -->
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-info">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>